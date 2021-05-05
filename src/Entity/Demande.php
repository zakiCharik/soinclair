<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\ORM\Mapping as ORM;
use \App\Entity\Adherant;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 */
class Demande
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
    private $fichierjoint;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity=Adherant::class, inversedBy="demandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adherent;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datecreation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $istraite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFichierjoint(): ?string
    {
        return $this->fichierjoint;
    }

    public function setFichierjoint(?string $fichierjoint): self
    {
        $this->fichierjoint = $fichierjoint;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAdherent(): ?Adherant
    {
        return $this->adherent;
    }

    public function setAdherent(?Adherant $adherent): self
    {
        $this->adherent = $adherent;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getIstraite(): ?bool
    {
        return $this->istraite;
    }

    public function setIstraite(?bool $istraite): self
    {
        $this->istraite = $istraite;

        return $this;
    }
}
