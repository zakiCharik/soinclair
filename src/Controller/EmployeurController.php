<?php

namespace App\Controller;

use App\Entity\Employeur;
use App\Entity\User;
use App\Form\EmployeurType;
use App\Repository\EmployeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/employeur")
 */
class EmployeurController extends AbstractController
{
    /**
     * @Route("/", name="employeur_index", methods={"GET"})
     */
    public function index(EmployeurRepository $employeurRepository): Response
    {
        return $this->render('employeur/index.html.twig', [
            'employeurs' => $employeurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="employeur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $employeur = new Employeur();
        $form = $this->createForm(EmployeurType::class, $employeur);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = new User();
            $user->setUsername($employeur->getUser()->getUsername());
            $user->setPassword($employeur->getPassword());
            $user->setIsLocked(false);
            $user->setType("Employeur");
            $user->setRole("ROLE_EMPLOYEUR");
            $user->setCreatedTime(new \DateTime());
            $employeur->setUser($user);

            /** @var UploadedFile $logoFile */
            $logoFile = $form->get('logo')->getData();
            // this condition is needed because the  field is not required
            // so the  file must be processed only when a file is uploaded
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$logoFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $logoFile->move(
                        $this->getParameter('upload_logo_employeur'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    var_dump("erreur uploading file : ".$e->getMessage());
                    // ... handle exception if something happens during file upload
                }

                // updates the '$newFilename' property to store the  file name
                // instead of its contents
                $employeur->setLogo($newFilename);
            }


            /** @var UploadedFile $dbEmployeurFile */
            $dbEmployeurFile = $form->get('database_employees')->getData();
            if ($dbEmployeurFile) {
                $originalFilename = pathinfo($dbEmployeurFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$dbEmployeurFile->guessExtension();

                try {
                    $dbEmployeurFile->move(
                        $this->getParameter('upload_fichieremployeur_employeur'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    var_dump("erreur uploading file : ".$e->getMessage());
                }
                $employeur->setDatabaseEmployees($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($employeur);
            $entityManager->flush();

            return $this->redirectToRoute('employeur_index');
        }

        return $this->render('employeur/new.html.twig', [
            'employeur' => $employeur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="employeur_show", methods={"GET"})
     */
    public function show(Employeur $employeur): Response
    {
        return $this->render('employeur/show.html.twig', [
            'employeur' => $employeur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="employeur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Employeur $employeur): Response
    {
        $form = $this->createForm(EmployeurType::class, $employeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('employeur_index');
        }

        return $this->render('employeur/edit.html.twig', [
            'employeur' => $employeur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="employeur_delete", methods={"POST"})
     */
    public function delete(Request $request, Employeur $employeur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employeur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($employeur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('employeur_index');
    }
}
