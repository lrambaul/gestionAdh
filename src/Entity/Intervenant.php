<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\IntervenantRepository")
 */
class Intervenant implements UserInterface
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
     * @ORM\Column(type="string", length=15)
     */
    private $tel_inter;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Association", mappedBy="intervenant")
     */
    private $associations;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Groupe", mappedBy="intervenants")
     */
    private $groupes;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_inter;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $apiToken;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personne", inversedBy="intervenant", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    public function __construct()
    {
        $this->id = uuid_create(UUID_TYPE_RANDOM);
        $this->associations = new ArrayCollection();
        $this->groupes = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTelInter(): ?string
    {
        return $this->tel_inter;
    }

    public function setTelInter(string $tel_inter): self
    {
        $this->tel_inter = $tel_inter;

        return $this;
    }


    /**
     * @return Collection|Association[]
     */
    public function getAssociations(): Collection
    {
        return $this->associations;
    }

    public function addAssociation(Association $association): self
    {
        if (!$this->associations->contains($association)) {
            $this->associations[] = $association;
            $association->addIntervenant($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->associations->contains($association)) {
            $this->associations->removeElement($association);
            $association->removeIntervenant($this);
        }

        return $this;
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
            $groupe->addIntervenant($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->contains($groupe)) {
            $this->groupes->removeElement($groupe);
            $groupe->removeIntervenant($this);
        }

        return $this;
    }

    public function getAdresseInter(): ?string
    {
        return $this->adresse_inter;
    }

    public function setAdresseInter(string $adresse_inter): self
    {
        $this->adresse_inter = $adresse_inter;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_INTERVENANT'];
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

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(?string $apiToken): self
    {
        $this->apiToken = $apiToken;

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
}
