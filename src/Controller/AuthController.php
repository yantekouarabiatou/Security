<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    #[Route('/auth', name: 'auth')]
    public function signin(): Response
    {
        return $this->render('auth/signin.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }

    #[Route('/signup', name: 'signup')]
    public function signup(): Response
    {
        return $this->render('auth/signup.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }

    #[Route('/success', name: 'success')]
    public function success(): Response
    {
        return $this->render('auth/auth-succes.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }

    
    #[Route('/two', name: 'two')]
    public function two(): Response
    {
        return $this->render('auth/twostep.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }


}
