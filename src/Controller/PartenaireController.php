<?php

namespace App\Controller;

use App\Entity\Partenaire;
use App\Entity\User;
use App\Form\PartenaireType;
use App\Repository\PartenaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/partenaire")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaire_index", methods={"GET"})
     */
    public function index(PartenaireRepository $partenaireRepository): Response
    {
        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="partenaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $partenaire = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = new User();
            $user->setUsername($partenaire->getUser()->getUsername());
            $user->setPassword(null);
            $user->setIsLocked(false);
            $user->setType("Partenaire");
            $user->setRole("ROLE_PARTENAIRE");
            $user->setCreatedTime(new \DateTime());
            $partenaire->setUser($user);

            /** @var UploadedFile $tarifsFile */
            $tarifsFile = $form->get('tarifs')->getData();
            if ($tarifsFile) {
                $originalFilename = pathinfo($tarifsFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$tarifsFile->guessExtension();
                try {
                    $tarifsFile->move(
                        $this->getParameter('upload_tarifs_partenaire'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    var_dump("erreur uploading file : ".$e->getMessage());
                }
                $partenaire->setLogo($newFilename);
            }


            /** @var UploadedFile $dbPrestatireFile */
            $dbPrestatireFile = $form->get('logo_path')->getData();
            if ($dbPrestatireFile) {
                $originalFilename = pathinfo($dbPrestatireFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$dbPrestatireFile->guessExtension();
                try {
                    $dbPrestatireFile->move(
                        $this->getParameter('upload_prestataire_partenaire'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    var_dump("erreur uploading file : ".$e->getMessage());
                }
                $partenaire->setLogoPath($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->flush();

            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/new.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="partenaire_show", methods={"GET"})
     */
    public function show(Partenaire $partenaire): Response
    {
        return $this->render('partenaire/show.html.twig', [
            'partenaire' => $partenaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="partenaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Partenaire $partenaire): Response
    {
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/edit.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="partenaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Partenaire $partenaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partenaire_index');
    }
}
