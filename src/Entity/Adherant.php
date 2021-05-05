<?php

namespace App\Entity;

use App\Repository\AdherantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdherantRepository::class)
 */
class Adherant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_soinclair;

    /**
    * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cartesoinclair;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cin;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="adherants",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_conjoint_first;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_conjoint_second;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbr_enfant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situation_pro;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $category_sociopro;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $maladie_chroni;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $formule_soin_clair;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $supp_one;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $supp_two;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $supp_three;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phonenumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $subscription_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $expiring_date;

    /**
     * @ORM\OneToMany(targetEntity=Demande::class, mappedBy="adherent", orphanRemoval=true)
     */
    private $demandes;

    public function __construct()
    {
        $this->demandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCartesoinclair(): ?string {
        return $this->cartesoinclair;
    }

    public function setCartesoinclair(string $cartesoinclair): self{
        $this->cartesoinclair = $cartesoinclair;
        return $this;
    }

    public function getNumeroSoinclair(): ?string
    {
        return $this->numero_soinclair;
    }

    public function setNumeroSoinclair(string $numero_soinclair): self
    {
        $this->numero_soinclair = $numero_soinclair;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

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

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getCodeClient(): ?string
    {
        return $this->code_client;
    }

    public function setCodeClient(?string $code_client): self
    {
        $this->code_client = $code_client;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getNomConjointFirst(): ?string
    {
        return $this->nom_conjoint_first;
    }

    public function setNomConjointFirst(?string $nom_conjoint_first): self
    {
        $this->nom_conjoint_first = $nom_conjoint_first;

        return $this;
    }

    public function getNomConjointSecond(): ?string
    {
        return $this->nom_conjoint_second;
    }

    public function setNomConjointSecond(?string $nom_conjoint_second): self
    {
        $this->nom_conjoint_second = $nom_conjoint_second;

        return $this;
    }

    public function getNbrEnfant(): ?int
    {
        return $this->nbr_enfant;
    }

    public function setNbrEnfant(?int $nbr_enfant): self
    {
        $this->nbr_enfant = $nbr_enfant;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getSituationPro(): ?string
    {
        return $this->situation_pro;
    }

    public function setSituationPro(string $situation_pro): self
    {
        $this->situation_pro = $situation_pro;

        return $this;
    }

    public function getCategorySociopro(): ?string
    {
        return $this->category_sociopro;
    }

    public function setCategorySociopro(?string $category_sociopro): self
    {
        $this->category_sociopro = $category_sociopro;

        return $this;
    }

    public function getMaladieChroni(): ?string
    {
        return $this->maladie_chroni;
    }

    public function setMaladieChroni(?string $maladie_chroni): self
    {
        $this->maladie_chroni = $maladie_chroni;

        return $this;
    }

    public function getFormuleSoinClair(): ?string
    {
        return $this->formule_soin_clair;
    }

    public function setFormuleSoinClair(?string $formule_soin_clair): self
    {
        $this->formule_soin_clair = $formule_soin_clair;

        return $this;
    }

    public function getSuppOne(): ?string
    {
        return $this->supp_one;
    }

    public function setSuppOne(?string $supp_one): self
    {
        $this->supp_one = $supp_one;

        return $this;
    }

    public function getSuppTwo(): ?string
    {
        return $this->supp_two;
    }

    public function setSuppTwo(?string $supp_two): self
    {
        $this->supp_two = $supp_two;

        return $this;
    }

    public function getSuppThree(): ?string
    {
        return $this->supp_three;
    }

    public function setSuppThree(?string $supp_three): self
    {
        $this->supp_three = $supp_three;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(?string $phonenumber): self
    {
        $this->phonenumber = $phonenumber;

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

    public function getSubscriptionDate(): ?\DateTimeInterface
    {
        return $this->subscription_date;
    }

    public function setSubscriptionDate(?\DateTimeInterface $subscription_date): self
    {
        $this->subscription_date = $subscription_date;

        return $this;
    }

    public function getExpiringDate(): ?\DateTimeInterface
    {
        return $this->expiring_date;
    }

    public function setExpiringDate(?\DateTimeInterface $expiring_date): self
    {
        $this->expiring_date = $expiring_date;

        return $this;
    }

    /**
     * @return Collection|Demande[]
     */
    public function getDemandes(): Collection
    {
        return $this->demandes;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demandes->contains($demande)) {
            $this->demandes[] = $demande;
            $demande->setAdherent($this);
        }

        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demandes->removeElement($demande)) {
            // set the owning side to null (unless already changed)
            if ($demande->getAdherent() === $this) {
                $demande->setAdherent(null);
            }
        }

        return $this;
    }
}
