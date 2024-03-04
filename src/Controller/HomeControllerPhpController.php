<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavController extends AbstractController
{

    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'page' => 'Accueil',
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('pages/services.html.twig', [
            'page' => 'Services',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig',[
            'page' => 'Contact',
        ]);
    }
}

?>