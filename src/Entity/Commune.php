<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommuneRepository::class)]
class Commune
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomCom = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Departement $Dep = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCom(): ?string
    {
        return $this->nomCom;
    }

    public function setNomCom(string $nomCom): static
    {
        $this->nomCom = $nomCom;

        return $this;
    }

    public function getDep(): ?Departement
    {
        return $this->Dep;
    }

    public function setDep(?Departement $Dep): static
    {
        $this->Dep = $Dep;

        return $this;
    }
}
