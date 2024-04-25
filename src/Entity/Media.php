<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MediaRepository::class)]
class Media
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomMedia = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?militaire $militaire = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?typeDemande $typeDemande = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?attestation $attestation = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?typeDemande $typeMedia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMedia(): ?string
    {
        return $this->nomMedia;
    }

    public function setNomMedia(string $nomMedia): static
    {
        $this->nomMedia = $nomMedia;

        return $this;
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

    public function getTypeDemande(): ?typeDemande
    {
        return $this->typeDemande;
    }

    public function setTypeDemande(?typeDemande $typeDemande): static
    {
        $this->typeDemande = $typeDemande;

        return $this;
    }

    public function getAttestation(): ?attestation
    {
        return $this->attestation;
    }

    public function setAttestation(?attestation $attestation): static
    {
        $this->attestation = $attestation;

        return $this;
    }

    public function getTypeMedia(): ?typeDemande
    {
        return $this->typeMedia;
    }

    public function setTypeMedia(?typeDemande $typeMedia): static
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }
}
