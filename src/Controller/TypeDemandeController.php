<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeDemandeController extends AbstractController
{
    #[Route('/typeDemande', name: 'type_demande')]
    public function index(): Response
    {
        return $this->render('type_demande/index.html.twig', [
            'controller_name' => 'TypeDemandeController',
        ]);
    }

    #[Route('/demande', name: 'app_demande')]
    public function demande(): Response
    {
        return $this->render('type_demande/demande.html.twig', [
            'controller_name' => 'TypeDemandeController',
        ]);
    }
}
