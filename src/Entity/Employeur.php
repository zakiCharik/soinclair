<?php

namespace App\Entity;

use App\Repository\EmployeurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeurRepository::class)
 */
class Employeur
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
    private $database_employees;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo_path;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activity;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="employeurs",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $subscription_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $expiring_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $confirmed_password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $assurance_contract;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatabaseEmployees(): ?string
    {
        return $this->database_employees;
    }

    public function setDatabaseEmployees(?string $database_employees): self
    {
        $this->database_employees = $database_employees;

        return $this;
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

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getConfirmedPassword(): ?string
    {
        return $this->confirmed_password;
    }

    public function setConfirmedPassword(?string $confirmed_password): self
    {
        $this->confirmed_password = $confirmed_password;

        return $this;
    }

    public function getAssuranceContract(): ?string
    {
        return $this->assurance_contract;
    }

    public function setAssuranceContract(?string $assurance_contract): self
    {
        $this->assurance_contract = $assurance_contract;

        return $this;
    }


    /**
     * Generates the magic method
     *
     */
    public function __toString(): ?string
    {
        // to show the name of the Category in the select
        return $this->id;
    }
}
