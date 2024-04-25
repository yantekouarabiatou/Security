<?php

namespace App\Entity;

use App\Repository\StructureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructureRepository::class)]
class Structure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomStruct = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?quartierVille $quart = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Affectation $aff = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStruct(): ?string
    {
        return $this->nomStruct;
    }

    public function setNomStruct(string $nomStruct): static
    {
        $this->nomStruct = $nomStruct;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getQuart(): ?quartierVille
    {
        return $this->quart;
    }

    public function setQuart(?quartierVille $quart): static
    {
        $this->quart = $quart;

        return $this;
    }

    public function getAff(): ?Affectation
    {
        return $this->aff;
    }

    public function setAff(?Affectation $aff): static
    {
        $this->aff = $aff;

        return $this;
    }
}
