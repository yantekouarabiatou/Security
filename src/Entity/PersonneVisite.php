<?php

namespace App\Entity;

use App\Repository\PersonneVisiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneVisiteRepository::class)]
class PersonneVisite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?personne $personne = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?visite $visite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonne(): ?personne
    {
        return $this->personne;
    }

    public function setPersonne(?personne $personne): static
    {
        $this->personne = $personne;

        return $this;
    }

    public function getVisite(): ?visite
    {
        return $this->visite;
    }

    public function setVisite(?visite $visite): static
    {
        $this->visite = $visite;

        return $this;
    }
}
