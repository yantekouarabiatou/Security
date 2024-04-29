<?php

namespace App\Form;

use App\Entity\Demande;
use App\Entity\typeDemande;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle',null,[
                'attr' => [
                    'class' => 'form-control'
                ]
                ])
            ->add('typeDemande', EntityType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'class' => typeDemande::class,

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
