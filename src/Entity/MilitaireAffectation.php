<?php

namespace App\Entity;

use App\Repository\MilitaireAffectationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MilitaireAffectationRepository::class)]
class MilitaireAffectation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?militaire $militaire = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Affectation $affectation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMilitaire(): ?militaire
    {
        return $this->militaire;
    }

    public function setMilitaire(?militaire $militaire): static
    {
        $this->militaire = $militaire;

        return $this;
    }

    public function getAffectation(): ?Affectation
    {
        return $this->affectation;
    }

    public function setAffectation(?Affectation $affectation): static
    {
        $this->affectation = $affectation;

        return $this;
    }
}
