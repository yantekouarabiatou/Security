<?php

namespace App\Entity;

use App\Repository\QuartierVilleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuartierVilleRepository::class)]
class QuartierVille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomQuart = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?arrondissement $arr = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomQuart(): ?string
    {
        return $this->nomQuart;
    }

    public function setNomQuart(string $nomQuart): static
    {
        $this->nomQuart = $nomQuart;

        return $this;
    }

    public function getArr(): ?arrondissement
    {
        return $this->arr;
    }

    public function setArr(?arrondissement $arr): static
    {
        $this->arr = $arr;

        return $this;
    }
}
