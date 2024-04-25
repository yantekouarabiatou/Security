<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomDep = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDep(): ?string
    {
        return $this->nomDep;
    }

    public function setNomDep(string $nomDep): static
    {
        $this->nomDep = $nomDep;

        return $this;
    }
}
