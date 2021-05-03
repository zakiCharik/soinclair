<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home_page", methods={"GET","HEAD"})
     */
    public function home(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/qui-sommes-nous-2", name="qui_sommesnous", methods={"GET","HEAD"})
     */
    public function quisomme(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/nos-publications", name="nos_publications", methods={"GET","HEAD"})
     */
    public function publications(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/services-soin-clair", name="services_soinclair", methods={"GET","HEAD"})
     */
    public function services(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/admin", name="admin_page", methods={"GET","HEAD"})
     */
    public function admin(): Response
    {
        if ($this->getUser()) {
            return $this->render('admin/security/login.html.twig', []);
        }

        return $this->render('admin/index.html.twig');
    }

    /**
     * @Route("/espace-adherant", name="espace_adherant", methods={"GET","HEAD"})
     */
    public function adherant(): Response
    {
        if ($this->getUser()) {
            return $this->render('vitrine/adherant/index.html.twig');

        }
        return $this->render('admin/security/login.html.twig', []);

    }


    /**
     * @Route("/espace-adherant/profil", name="adherant_profil", methods={"GET","HEAD"})
     */
    public function adherant_profil(): Response
    {
        if ($this->getUser()) {
            return $this->render('vitrine/adherant/profil.html.twig');

        }
        return $this->render('admin/security/login.html.twig', []);

    }

    /**
     * @Route("/espace-employeur", name="espace_employeur", methods={"GET","HEAD"})
     */
    public function employeur(): Response
    {
        if ($this->getUser()) {
            return $this->render('vitrine/employeur/index.html.twig');

        }
        return $this->render('admin/security/login.html.twig', []);
    }

    /**
     * @Route("/espace-partenaire", name="espace_partenaire", methods={"GET","HEAD"})
     */
    public function partner(): Response
    {
        if ($this->getUser()) {
            return $this->render('vitrine/partenaire/index.html.twig');

        }
        return $this->render('admin/security/login.html.twig', []);
    }
}