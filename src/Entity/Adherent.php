<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\AdherentRepository")
 */
class Adherent implements UserInterface
{
    /**
     * @var string L'identifiant au format UUID
     *
     * @ORM\Id()
     * @ORM\Column(name="id", type="string")
     *
     * @Assert\Uuid()
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $anniv_adh;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_licence;


    /**
     * @ORM\Column(type="string", length=15)
     */
    private $tel;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Association", inversedBy="adherents")
     */
    private $asso;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personne", inversedBy="adherent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_adh;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Groupe", inversedBy="adherents")
     */
    private $groupes;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $apiToken;

    public function __construct()
    {
        $this->id = uuid_create(UUID_TYPE_RANDOM);
        $this->asso = new ArrayCollection();
        $this->groupes = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAnnivAdh(): ?\DateTimeInterface
    {
        return $this->anniv_adh;
    }

    public function setAnnivAdh(\DateTimeInterface $anniv_adh): self
    {
        $this->anniv_adh = $anniv_adh;

        return $this;
    }

    public function getNumLicence(): ?int
    {
        return $this->num_licence;
    }

    public function setNumLicence(int $num_licence): self
    {
        $this->num_licence = $num_licence;

        return $this;
    }

    public function getAdresseAdh(): ?string
    {
        return $this->adresse_adh;
    }


    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }


    /**
     * @return Collection|Association[]
     */
    public function getAsso(): Collection
    {
        return $this->asso;
    }

    public function addAsso(Association $asso): self
    {
        if (!$this->asso->contains($asso)) {
            $this->asso[] = $asso;
        }

        return $this;
    }

    public function removeAsso(Association $asso): self
    {
        if ($this->asso->contains($asso)) {
            $this->asso->removeElement($asso);
        }

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    public function setAdresseAdh(string $adresse_adh): self
    {
        $this->adresse_adh = $adresse_adh;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_ADHERENT'];
    }

    public function getUsername()
    {
        return $this->getPersonne()->getMailPers();
    }

    public function getPassword()
    {
        return $this->getPersonne()->getMdp();
    }

    public function getSalt ()
    {

    }
    public function eraseCredentials ()
    {

    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->contains($groupe)) {
            $this->groupes->removeElement($groupe);
        }

        return $this;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(string $apiToken): self
    {
        $this->apiToken = $apiToken;

        return $this;
    }
}
