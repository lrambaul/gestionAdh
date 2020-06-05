<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssociationRepository")
 */

class Association
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_asso;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_asso;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $tel_asso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $federation_asso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comite_asso;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Adherent", mappedBy="asso")
     */
    private $adherents;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Intervenant", inversedBy="associations")
     */
    private $intervenant;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Personne", inversedBy="associations")
     */
    private $personnes;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_asso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure", inversedBy="associations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $structure;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Groupe", mappedBy="association", orphanRemoval=true)
     */
    private $groupes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AdminAsso", mappedBy="association")
     */
    private $adminsAsso;

    public function __construct()
    {
        $this->id = uuid_create(UUID_TYPE_RANDOM);
        $this->adherents = new ArrayCollection();
        $this->intervenant = new ArrayCollection();
        $this->personnes = new ArrayCollection();
        $this->groupes = new ArrayCollection();
        $this->adminsAsso = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAsso(): ?string
    {
        return $this->nom_asso;
    }

    public function setNomAsso(string $nom_asso): self
    {
        $this->nom_asso = $nom_asso;

        return $this;
    }

    public function getMailAsso(): ?string
    {
        return $this->mail_asso;
    }

    public function setMailAsso(string $mail_asso): self
    {
        $this->mail_asso = $mail_asso;

        return $this;
    }

    public function getTelAsso(): ?string
    {
        return $this->tel_asso;
    }

    public function setTelAsso(string $tel_asso): self
    {
        $this->tel_asso = $tel_asso;

        return $this;
    }

    public function getAdresseAsso(): ?string
    {
        return $this->adresse_asso;
    }

    public function setAdresseAsso(string $adresse_asso): self
    {
        $this->adresse_asso = $adresse_asso;

        return $this;
    }

    public function getFederationAsso(): ?string
    {
        return $this->federation_asso;
    }

    public function setFederationAsso(string $federation_asso): self
    {
        $this->federation_asso = $federation_asso;

        return $this;
    }

    public function getComiteAsso(): ?string
    {
        return $this->comite_asso;
    }

    public function setComiteAsso(?string $comite_asso): self
    {
        $this->comite_asso = $comite_asso;

        return $this;
    }

    /**
     * @return Collection|Adherent[]
     */
    public function getAdherents(): Collection
    {
        return $this->adherents;
    }

    public function addAdherent(Adherent $adherent): self
    {
        if (!$this->adherents->contains($adherent)) {
            $this->adherents[] = $adherent;
            $adherent->addAsso($this);
        }

        return $this;
    }

    public function removeAdherent(Adherent $adherent): self
    {
        if ($this->adherents->contains($adherent)) {
            $this->adherents->removeElement($adherent);
            $adherent->removeAsso($this);
        }

        return $this;
    }

    /**
     * @return Collection|Intervenant[]
     */
    public function getIntervenant(): Collection
    {
        return $this->intervenant;
    }

    public function addIntervenant(Intervenant $intervenant): self
    {
        if (!$this->intervenant->contains($intervenant)) {
            $this->intervenant[] = $intervenant;
        }

        return $this;
    }

    public function removeIntervenant(Intervenant $intervenant): self
    {
        if ($this->intervenant->contains($intervenant)) {
            $this->intervenant->removeElement($intervenant);
        }

        return $this;
    }

    /**
     * @return Collection|Personne[]
     */
    public function getPersonnes(): Collection
    {
        return $this->personnes;
    }

    public function addPersonne(Personne $personne): self
    {
        if (!$this->personnes->contains($personne)) {
            $this->personnes[] = $personne;
        }

        return $this;
    }

    public function removePersonne(Personne $personne): self
    {
        if ($this->personnes->contains($personne)) {
            $this->personnes->removeElement($personne);
        }

        return $this;
    }

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $id_structure): self
    {
        $this->structure = $id_structure;

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
            $groupe->setAssociation($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->contains($groupe)) {
            $this->groupes->removeElement($groupe);
            // set the owning side to null (unless already changed)
            if ($groupe->getAssociation() === $this) {
                $groupe->setAssociation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AdminAsso[]
     */
    public function getAdminsAsso(): Collection
    {
        return $this->adminsAsso;
    }

    public function addAdminsAsso(AdminAsso $adminsAsso): self
    {
        if (!$this->adminsAsso->contains($adminsAsso)) {
            $this->adminsAsso[] = $adminsAsso;
            $adminsAsso->setAssociation($this);
        }

        return $this;
    }

    public function removeAdminsAsso(AdminAsso $adminsAsso): self
    {
        if ($this->adminsAsso->contains($adminsAsso)) {
            $this->adminsAsso->removeElement($adminsAsso);
            // set the owning side to null (unless already changed)
            if ($adminsAsso->getAssociation() === $this) {
                $adminsAsso->setAssociation(null);
            }
        }

        return $this;
    }


}
