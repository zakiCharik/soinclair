<?php

namespace App\Entity;

use App\Repository\PartenaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartenaireRepository::class)
 */
class Partenaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo_path;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $specialite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $description_profil;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tarifs;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="partenaires",cascade={"persist"}).
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tarifs_path;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $champs_supp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $horraires;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_fix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_mobile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLogoPath(): ?string
    {
        return $this->logo_path;
    }

    public function setLogoPath(?string $logo_path): self
    {
        $this->logo_path = $logo_path;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDescriptionProfil(): ?string
    {
        return $this->description_profil;
    }

    public function setDescriptionProfil(string $description_profil): self
    {
        $this->description_profil = $description_profil;

        return $this;
    }

    public function getTarifs(): ?float
    {
        return $this->tarifs;
    }

    public function setTarifs(?float $tarifs): self
    {
        $this->tarifs = $tarifs;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTarifsPath(): ?string
    {
        return $this->tarifs_path;
    }

    public function setTarifsPath(?string $tarifs_path): self
    {
        $this->tarifs_path = $tarifs_path;

        return $this;
    }

    public function getChampsSupp(): ?string
    {
        return $this->champs_supp;
    }

    public function setChampsSupp(?string $champs_supp): self
    {
        $this->champs_supp = $champs_supp;

        return $this;
    }

    public function getHorraires(): ?string
    {
        return $this->horraires;
    }

    public function setHorraires(?string $horraires): self
    {
        $this->horraires = $horraires;

        return $this;
    }

    public function getPhoneFix(): ?string
    {
        return $this->phone_fix;
    }

    public function setPhoneFix(?string $phone_fix): self
    {
        $this->phone_fix = $phone_fix;

        return $this;
    }

    public function getPhoneMobile(): ?string
    {
        return $this->phone_mobile;
    }

    public function setPhoneMobile(?string $phone_mobile): self
    {
        $this->phone_mobile = $phone_mobile;

        return $this;
    }
}
