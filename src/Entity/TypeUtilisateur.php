<?php

namespace App\Entity;

use App\Repository\TypeUtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeUtilisateurRepository::class)]
class TypeUtilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomTypeUtil = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeUtil(): ?string
    {
        return $this->nomTypeUtil;
    }

    public function setNomTypeUtil(string $nomTypeUtil): static
    {
        $this->nomTypeUtil = $nomTypeUtil;

        return $this;
    }
}
