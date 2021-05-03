<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $username;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $created_time;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $modified_time;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_locked;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity=Adherant::class, mappedBy="user")
     */
    private $adherants;

    /**
     * @ORM\OneToMany(targetEntity=Employeur::class, mappedBy="user")
     */
    private $employeurs;

    /**
     * @ORM\OneToMany(targetEntity=Partenaire::class, mappedBy="user")
     */
    private $partenaires;

    public function __construct()
    {
        $this->adherants = new ArrayCollection();
        $this->employeurs = new ArrayCollection();
        $this->partenaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->created_time;
    }

    public function setCreatedTime(?\DateTimeInterface $created_time): self
    {
        $this->created_time = $created_time;

        return $this;
    }

    public function getModifiedTime(): ?\DateTimeInterface
    {
        return $this->modified_time;
    }

    public function setModifiedTime(?\DateTimeInterface $modified_time): self
    {
        $this->modified_time = $modified_time;

        return $this;
    }

    public function getIsLocked(): ?bool
    {
        return $this->is_locked;
    }

    public function setIsLocked(bool $is_locked): self
    {
        $this->is_locked = $is_locked;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password = null): self
    {
        if($password == null || empty($password)){
            $this->password = $this->randomPassword();
        }else {
            $this->password = $password;
        }
        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }


    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array($this->getRole());
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @return Collection|Adherant[]
     */
    public function getAdherants(): Collection
    {
        return $this->adherants;
    }

    public function addAdherant(Adherant $adherant): self
    {
        if (!$this->adherants->contains($adherant)) {
            $this->adherants[] = $adherant;
            $adherant->setUser($this);
        }

        return $this;
    }

    public function removeAdherant(Adherant $adherant): self
    {
        if ($this->adherants->removeElement($adherant)) {
            // set the owning side to null (unless already changed)
            if ($adherant->getUser() === $this) {
                $adherant->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Employeur[]
     */
    public function getEmployeurs(): Collection
    {
        return $this->employeurs;
    }

    public function addEmployeur(Employeur $employeur): self
    {
        if (!$this->employeurs->contains($employeur)) {
            $this->employeurs[] = $employeur;
            $employeur->setUser($this);
        }

        return $this;
    }

    public function removeEmployeur(Employeur $employeur): self
    {
        if ($this->employeurs->removeElement($employeur)) {
            // set the owning side to null (unless already changed)
            if ($employeur->getUser() === $this) {
                $employeur->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Partenaire[]
     */
    public function getPartenaires(): Collection
    {
        return $this->partenaires;
    }

    public function addPartenaire(Partenaire $partenaire): self
    {
        if (!$this->partenaires->contains($partenaire)) {
            $this->partenaires[] = $partenaire;
            $partenaire->setUser($this);
        }

        return $this;
    }

    public function removePartenaire(Partenaire $partenaire): self
    {
        if ($this->partenaires->removeElement($partenaire)) {
            // set the owning side to null (unless already changed)
            if ($partenaire->getUser() === $this) {
                $partenaire->setUser(null);
            }
        }

        return $this;
    }

    //render random password
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
