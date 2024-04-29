<?php

namespace App\Controller;

use App\Entity\TypeUtilisateur;
use App\Repository\TypeUtilisateurRepository;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/inscription', name: 'app_inscription')]
    public function inscription(Request $request,EntityManagerInterface $manager,TypeUtilisateurRepository $typeUtilisateurRepository): Response
    {
        $typeUtilisateurs= $typeUtilisateurRepository->findAll();
        $form = $this->createForm(InscriptionType::class);
        $form->handleRequest($request);
        //  dd($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $user= $form->getData();
        
            $username = $user-> getUsername();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $typeUtilisateur = $user->getTypeUtilisateur();
            
            $manager->persist($user);
            $manager->flush();
           
        }
        return $this->render('inscription/index.html.twig', [
            'user' => $form->createView(),
            'typeUtilisateurs'=> $typeUtilisateurs,

        ]);
    }
}







