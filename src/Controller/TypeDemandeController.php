<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeDemandeController extends AbstractController
{
    #[Route('/type/demande', name: 'type_demande')]
    public function index(): Response
    {
        return $this->render('type_demande/index.html.twig', [
            'controller_name' => 'TypeDemandeController',
        ]);
    }
}
