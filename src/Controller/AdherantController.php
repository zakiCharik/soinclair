<?php

namespace App\Controller;

use App\Entity\Adherant;
use App\Entity\User;
use App\Form\AdherantType;
use App\Repository\AdherantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Finder\Finder;
use PhpOffice\PhpSpreadsheet\IOFactory;
use ZipArchive;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * @Route("/admin/adherant")
 */
class AdherantController extends AbstractController
{
    /**
     * @Route("/", name="adherant_index", methods={"GET"})
     */
    public function index(AdherantRepository $adherantRepository): Response
    {
        // Create new Zip Archive.
        $zip = new \ZipArchive();
        return $this->render('adherant/index.html.twig', [
            'adherants' => $adherantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/import", name="adherant_import", methods={"GET"})
     */
    public function import(AdherantRepository $adherantRepository): Response
    {
        return $this->render('adherant/import.html.twig', []);
    }

    /**
     * @Route("/importZip", name="adherant_importzip", methods={"GET"})
     */
    public function importZip(AdherantRepository $adherantRepository): Response
    {
        return $this->render('adherant/import_card.html.twig', []);
    }

    /**
     * @Route("/new", name="adherant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $adherant = new Adherant();
        //Setting default password for the user
        $user = new User();
        $adherant->setSubscriptionDate(new \DateTime());
        $user->setCreatedTime(new \DateTime());
        $user->setPassword($this->randomPassword());
        $user->setIsLocked(false);
        $user->setType("Adherant");
        $user->setRole("ROLE_ADHERANT");
        $adherant->setUser($user);

        $form = $this->createForm(AdherantType::class, $adherant);
        $form->handleRequest($request);

        if ($form->isSubmitted() ) {

            /** @var UploadedFile $cartesoinclair */
            $cartesoinclair = $form->get('cartesoinclair')->getData();
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($cartesoinclair) {
                $originalFilename = pathinfo($cartesoinclair->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$cartesoinclair->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $cartesoinclair->move(
                        $this->getParameter('upload_cartesoinclair_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    var_dump("erreur uploading file : ".$e->getMessage());
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $adherant->setCartesoinclair($newFilename);
            }

            // ... persist the $product variable or any other work

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($adherant);
            $entityManager->flush();

            return $this->redirectToRoute('adherant_index');
        }

        return $this->render('adherant/new.html.twig', [
            'adherant' => $adherant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="adherant_show", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function show(Adherant $adherant): Response
    {
        return $this->render('adherant/show.html.twig', [
            'adherant' => $adherant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="adherant_edit", methods={"GET","POST"}, requirements={"id":"\d+"})
     */
    public function edit(Request $request, Adherant $adherant): Response
    {
        $form = $this->createForm(AdherantType::class, $adherant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adherant_index');
        }

        return $this->render('adherant/edit.html.twig', [
            'adherant' => $adherant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="adherant_delete", methods={"POST"}, requirements={"id":"\d+"})
     */
    public function delete(Request $request, Adherant $adherant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adherant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($adherant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('adherant_index');
    }
    //-----------------------------------------------------------
    // upload excel file
    //-----------------------------------------------------------
    /**
     * @Route("/upload-excel", name="upload-excel")
     * @param Request $request
     * @throws \Exception
     * @return Response
     */
    public function xslx(Request $request)
    {
        $file = $request->files->get('myfile'); // get the file from the sent request

        if (empty($file))
        {
            return new Response("No file specified",
                Response::HTTP_UNPROCESSABLE_ENTITY, ['content-type' => 'text/plain']);
        }

        $fileFolder = $this->getParameter('upload_excel_adherant')."/";  //choose the folder in which the uploaded file will be stored

        $filePathName = md5(uniqid()) . $file->getClientOriginalName();
        // apply md5 function to generate an unique identifier for the file and concat it with the file extension
        try {
            $file->move($fileFolder, $filePathName);
        } catch (FileException $e) {
            dd($e);
        }

        $spreadsheet = IOFactory::load($fileFolder . $filePathName); // Here we are able to read from the excel file

        $row = $spreadsheet->getActiveSheet()->removeRow(1); // I added this to be able to remove the first file line

        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true); // here, the read data is turned into an array
        $entityManager = $this->getDoctrine()->getManager();

        foreach ($sheetData as $Row)
        {

            $entreprise = $Row['A'];
            $codeClient = $Row['B'];
            $dateInscription = $Row['C'];
            $dateExpiration = $Row['D'];
            $numeroSoinclair = $Row['E'];
            $nom = $Row['F'];
            $prenom = $Row['G'];
            $nomConjoinUn = $Row['H'];
            $nomConjoinDeux = $Row['I'];
            $nbreEnfant = $Row['J'];
            $cin = $Row['K'];
            $adresse = $Row['L'];
            $ville = $Row['M'];
            $dateNaissance = $Row['N'];
            $numeroMobile = $Row['O'];
            $password = $Row['P'];
            $situationPro = $Row['Q'];
            $categorySociopro = $Row['R'];
            $maladieChron = $Row['S'];
            $formuleSoinClair = $Row['T'];
            $champsSupp = $Row['U'];
            $champsSuppDeux = $Row['V'];
            $champsSuppTrois = $Row['W'];




            $adherent_existant = $entityManager->getRepository(Adherant::class)->findOneBy(array('numero_soinclair' => $numeroSoinclair));
            $user_existant = $entityManager->getRepository(User::class)->findOneBy(array('username' => $numeroSoinclair));
                // make sure that the user does not already exists in your db
            if (!$adherent_existant)
            {
                $newUser = new User();
                $adherent = new Adherant();
                if ($user_existant) {
                    $newUser = $user_existant;
                }else{
                    $newUser->setUsername($numeroSoinclair);
                    if (empty($password))
                    {
                        $password = $this->randomPassword();
                    }
                    $newUser->setPassword($password);
                    $newUser->setIsLocked(false);
                }

                $adherent->setEntreprise($entreprise);
                $adherent->setCodeClient($codeClient);
                $adherent->setSubscriptionDate(new \DateTime($dateInscription) );
                $adherent->setExpiringDate(new \DateTime($dateExpiration));
                $adherent->setLastname($nom);
                $adherent->setFirstname($prenom);
                $adherent->setNomConjointFirst($nomConjoinUn);
                $adherent->setNomConjointSecond($nomConjoinDeux);
                $adherent->setNbrEnfant($nbreEnfant);
                $adherent->setCin($cin);
                $adherent->setAdresse($adresse);
                $adherent->setVille($ville);
                $adherent->setDateNaissance(new \DateTime($dateNaissance));
                $adherent->setPhonenumber($numeroMobile);
                $adherent->setSituationPro($situationPro);
                $adherent->setMaladieChroni($maladieChron);
                $adherent->setFormuleSoinClair($formuleSoinClair);
                $adherent->setSuppOne($champsSupp);
                $adherent->setSuppTwo($champsSuppDeux);
                $adherent->setSuppThree($champsSuppTrois);
                $adherent->setNumeroSoinclair($numeroSoinclair);
                $adherent->setUser($newUser);

                $entityManager->persist($adherent);
                $entityManager->flush();
                // here Doctrine checks all the fields of all fetched data and make a transaction to the database.
            }
        }
        return $this->redirectToRoute('adherant_index');
    }


    //-----------------------------------------------------------
    // upload zip file
    //-----------------------------------------------------------
    /**
     * @Route("/upload-zip", name="upload-zip")
     * @param Request $request
     * @throws \Exception
     * @return Response
     */
    public function uploadZip(Request $request)
    {
        $file = $request->files->get('myfile'); // get the file from the sent request

        if (empty($file)) {
            return new Response("No file specified",
                Response::HTTP_UNPROCESSABLE_ENTITY, ['content-type' => 'text/plain']);
        }

        $filename = $file->getClientOriginalName();
        $fileType = $file->getClientOriginalExtension();
        $folderUpload = $this->getParameter('upload_cards_adherant') . "/";  //choose the folder in which the uploaded file will be stored

        if ($fileType == 'zip'){

            try {
                $file->move($folderUpload, $filename);

                // le repertoire porte le nom du fichier sans l extension .zip
                $repertoire_unzip = basename($filename,'.zip');

                // open the archive file
                $zip = new ZipArchive;
                if ($zip->open($folderUpload.$filename) === TRUE)
                {
                    $newExtractedFolderPath= $folderUpload.$repertoire_unzip.'/';
                    // on decompresse le fichier
                    $zip->extractTo($newExtractedFolderPath);
                    //and close stream file
                    $zip->close();

                    $entityManager = $this->getDoctrine()->getManager();

                    $finder = new Finder();
                    // find all files in the current directory
                    $finder->files()->in($newExtractedFolderPath);
                    $filesystem = new Filesystem();

                    // check if there are any search results
                    if ($finder->hasResults()) {
                        //loop throw evry file in this directory and read the name of the file
                        foreach ($finder as $file) {
                            $filename  = $file->getFilename();
                            $pathAndName = $file->getRealPath();
                            //get numero from filename
                            $numeroSoinClair = explode('.',$filename)[0];

                            //check if the adherant exist
                            $adherent_existant = $entityManager->getRepository(Adherant::class)->findOneBy(array('numero_soinclair' => $numeroSoinClair));

                            // make sure that the user does not already exists in your db
                            if ($adherent_existant)
                            {

                                $filesystem->copy($pathAndName,$this->getParameter('upload_cartesoinclair_directory').'/'.$filename,true);

                                // updates the 'brochureFilename' property to store the PDF file name
                                // instead of its contents
                                $adherent_existant->setCartesoinclair($filename);

                                $entityManager->persist($adherent_existant);
                                $entityManager->flush();
                                // here Doctrine checks all the fields of all fetched data and make a transaction to the database.
                            }
                        }

                    }



                    $this->erreurUpload="Upload et décompression du fichier ".$filename." Ok";
                }
                else {
                    $this->erreurUpload="Erreur lors de la décompression du fichier";
                }

            } catch (FileException $e) {
                dd($e);
            }

        }


        return $this->redirectToRoute('adherant_index');
    }

    //-----------------------------------------------------------
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
