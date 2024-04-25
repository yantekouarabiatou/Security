<?php

namespace App\Entity;

use App\Repository\TypeMediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeMediaRepository::class)]
class TypeMedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomTypeMedia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeMedia(): ?string
    {
        return $this->nomTypeMedia;
    }

    public function setNomTypeMedia(string $nomTypeMedia): static
    {
        $this->nomTypeMedia = $nomTypeMedia;

        return $this;
    }
}
