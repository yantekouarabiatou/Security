<?php

namespace App\Controller;
use App\Entity\Demande;
use App\Form\DemandeFormType;
use App\Repository\TypeDemandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function demande(Request $request,EntityManagerInterface $manager,TypeDemandeRepository $typeDemande): Response
    {
        $form = $this->createForm(DemandeFormType::class);

        $form->handleRequest($request);
        // dd($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $demande = $form->getData();
            // Vous n'avez pas besoin de vérifier $demande !== null car $form->getData() ne renverra jamais null après que le formulaire a été soumis et validé.
        
            // Maintenant, vous pouvez accéder aux propriétés de l'objet $demande directement
            $libelle = $demande->getLibelle();
            if ($libelle !== null) {
                // Faites quelque chose avec $libelle si nécessaire
            }
        
            // Récupération du type de demande à partir de l'objet $demande
            $typeDemande = $demande->getTypeDemande();
        $manager->persist($demande);
        $manager->flush();
 }
        return $this->render('type_demande/demande.html.twig', [
            'controller_name' => 'TypeDemandeController',
            'demande' => $form->createView(),
        ]);
    }
}
