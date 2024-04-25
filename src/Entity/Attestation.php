<?php

namespace App\Entity;

use App\Repository\AttestationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttestationRepository::class)]
class Attestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $raisonSocialeBeneficiaire = null;

    #[ORM\Column(length: 255)]
    private ?string $raisonSocialePrestataire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateService = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dureeService = null;

    #[ORM\Column(length: 255)]
    private ?string $nomMilitaire = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomMilitaire = null;

    #[ORM\Column(length: 255)]
    private ?string $nomServiceSecurite = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomServiceSecurite = null;

    #[ORM\Column(length: 255)]
    private ?string $posteServiceSecurite = null;

    #[ORM\Column(length: 255)]
    private ?string $PosteMilitaire = null;

    #[ORM\Column(length: 255)]
    private ?string $CoutGlobal = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $dateAttestation = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?modele $Modele = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getRaisonSocialeBeneficiaire(): ?string
    {
        return $this->raisonSocialeBeneficiaire;
    }

    public function setRaisonSocialeBeneficiaire(string $raisonSocialeBeneficiaire): static
    {
        $this->raisonSocialeBeneficiaire = $raisonSocialeBeneficiaire;

        return $this;
    }

    public function getRaisonSocialePrestataire(): ?string
    {
        return $this->raisonSocialePrestataire;
    }

    public function setRaisonSocialePrestataire(string $raisonSocialePrestataire): static
    {
        $this->raisonSocialePrestataire = $raisonSocialePrestataire;

        return $this;
    }

    public function getDateService(): ?\DateTimeInterface
    {
        return $this->dateService;
    }

    public function setDateService(\DateTimeInterface $dateService): static
    {
        $this->dateService = $dateService;

        return $this;
    }

    public function getDureeService(): ?\DateTimeInterface
    {
        return $this->dureeService;
    }

    public function setDureeService(\DateTimeInterface $dureeService): static
    {
        $this->dureeService = $dureeService;

        return $this;
    }

    public function getNomMilitaire(): ?string
    {
        return $this->nomMilitaire;
    }

    public function setNomMilitaire(string $nomMilitaire): static
    {
        $this->nomMilitaire = $nomMilitaire;

        return $this;
    }

    public function getPrenomMilitaire(): ?string
    {
        return $this->prenomMilitaire;
    }

    public function setPrenomMilitaire(string $prenomMilitaire): static
    {
        $this->prenomMilitaire = $prenomMilitaire;

        return $this;
    }

    public function getNomServiceSecurite(): ?string
    {
        return $this->nomServiceSecurite;
    }

    public function setNomServiceSecurite(string $nomServiceSecurite): static
    {
        $this->nomServiceSecurite = $nomServiceSecurite;

        return $this;
    }

    public function getPrenomServiceSecurite(): ?string
    {
        return $this->prenomServiceSecurite;
    }

    public function setPrenomServiceSecurite(string $prenomServiceSecurite): static
    {
        $this->prenomServiceSecurite = $prenomServiceSecurite;

        return $this;
    }

    public function getPosteServiceSecurite(): ?string
    {
        return $this->posteServiceSecurite;
    }

    public function setPosteServiceSecurite(string $posteServiceSecurite): static
    {
        $this->posteServiceSecurite = $posteServiceSecurite;

        return $this;
    }

    public function getPosteMilitaire(): ?string
    {
        return $this->PosteMilitaire;
    }

    public function setPosteMilitaire(string $PosteMilitaire): static
    {
        $this->PosteMilitaire = $PosteMilitaire;

        return $this;
    }

    public function getCoutGlobal(): ?string
    {
        return $this->CoutGlobal;
    }

    public function setCoutGlobal(string $CoutGlobal): static
    {
        $this->CoutGlobal = $CoutGlobal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDateAttestation(): ?string
    {
        return $this->dateAttestation;
    }

    public function setDateAttestation(string $dateAttestation): static
    {
        $this->dateAttestation = $dateAttestation;

        return $this;
    }

    public function getModele(): ?modele
    {
        return $this->Modele;
    }

    public function setModele(?modele $Modele): static
    {
        $this->Modele = $Modele;

        return $this;
    }
}
