<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Selectable;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\Expr\Select;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\SuperAdminRepository;
use App\Repository\PersonneRepository;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonneRepository")
 */
class Personne implements UserInterface, \Serializable
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
    private $nom_pers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_pers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_pers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Adherent", mappedBy="personne", cascade={"persist", "remove"})
     */
    private $adherent;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Association", mappedBy="personnes")
     */
    private $associations;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Structure", mappedBy="personnes")
     */
    private $structures;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AdminAsso", mappedBy="personne")
     */
    private $adminAssos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AdminStructure", mappedBy="personne")
     */
    private $adminStructures;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\SuperAdmin", mappedBy="personne", cascade={"persist", "remove"})
     */
    private $superAdmin;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Intervenant", mappedBy="personne", cascade={"persist", "remove"})
     */
    private $intervenant;


    public function __construct()
    {
        $this->associations = new ArrayCollection();
        $this->structures = new ArrayCollection();
        $this->adminAssos = new ArrayCollection();
        $this->adminStructures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPers(): ?string
    {
        return $this->nom_pers;
    }

    public function setNomPers(string $nom_pers): self
    {
        $this->nom_pers = $nom_pers;

        return $this;
    }

    public function getPrenomPers(): ?string
    {
        return $this->prenom_pers;
    }

    public function setPrenomPers(string $prenom_pers): self
    {
        $this->prenom_pers = $prenom_pers;

        return $this;
    }

    public function getMailPers(): ?string
    {
        return $this->mail_pers;
    }

    public function setMailPers(string $mail_pers): self
    {
        $this->mail_pers = $mail_pers;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getAdherent(): ?Adherent
    {
        return $this->adherent;
    }

    public function setAdherent(Adherent $adherent): self
    {
        $this->adherent = $adherent;

        // set the owning side of the relation if necessary
        if ($adherent->getPersonne() !== $this) {
            $adherent->setPersonne($this);
        }

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
            $association->addPersonne($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->associations->contains($association)) {
            $this->associations->removeElement($association);
            $association->removePersonne($this);
        }

        return $this;
    }

    /**
     * @return Collection|Structure[]
     */
    public function getStructures(): Collection
    {
        return $this->structures;
    }

    public function addStructure(Structure $structure): self
    {
        if (!$this->structures->contains($structure)) {
            $this->structures[] = $structure;
            $structure->addPersonne($this);
        }

        return $this;
    }

    public function removeStructure(Structure $structure): self
    {
        if ($this->structures->contains($structure)) {
            $this->structures->removeElement($structure);
            $structure->removePersonne($this);
        }

        return $this;
    }

    /**
     * @return Collection|AdminAsso[]
     */
    public function getAdminAssos(): Collection
    {
        return $this->adminAssos;
    }

    public function addAdminAsso(AdminAsso $adminAsso): self
    {
        if (!$this->adminAssos->contains($adminAsso)) {
            $this->adminAssos[] = $adminAsso;
            $adminAsso->setPersonne($this);
        }

        return $this;
    }

    public function removeAdminAsso(AdminAsso $adminAsso): self
    {
        if ($this->adminAssos->contains($adminAsso)) {
            $this->adminAssos->removeElement($adminAsso);
            // set the owning side to null (unless already changed)
            if ($adminAsso->getPersonne() === $this) {
                $adminAsso->setPersonne(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AdminStructure[]
     */
    public function getAdminStructures(): Collection
    {
        return $this->adminStructures;
    }

    public function addAdminStructure(AdminStructure $adminStructure): self
    {
        if (!$this->adminStructures->contains($adminStructure)) {
            $this->adminStructures[] = $adminStructure;
            $adminStructure->setPersonne($this);
        }

        return $this;
    }

    public function removeAdminStructure(AdminStructure $adminStructure): self
    {
        if ($this->adminStructures->contains($adminStructure)) {
            $this->adminStructures->removeElement($adminStructure);
            // set the owning side to null (unless already changed)
            if ($adminStructure->getPersonne() === $this) {
                $adminStructure->setPersonne(null);
            }
        }

        return $this;
    }

    public function getSuperAdmin(): ?SuperAdmin
    {
        return $this->superAdmin;
    }

    public function setSuperAdmin(SuperAdmin $superAdmin): self
    {
        $this->superAdmin = $superAdmin;

        // set the owning side of the relation if necessary
        if ($superAdmin->getPersonne() !== $this) {
            $superAdmin->setPersonne($this);
        }

        return $this;
    }

    public function getRoles()
    {
      return ['ROLE_PERSONNE'];

    }

    public function getUsername()
    {
        return $this->mail_pers;
    }

    public function getPassword()
    {
        return $this->mdp;
    }
    public function getSalt ()
    {

    }
    public function eraseCredentials ()
    {

    }

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->nom_pers,
            $this->prenom_pers,
            $this->mail_pers,
            $this->mdp]);
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->nom_pers,
            $this->prenom_pers,
            $this->mail_pers,
            $this->mdp) = unserialize( $serialized, ['allowed_classes' => false]);
    }

    public function getIntervenant(): ?Intervenant
    {
        return $this->intervenant;
    }

    public function setIntervenant(Intervenant $intervenant): self
    {
        $this->intervenant = $intervenant;

        // set the owning side of the relation if necessary
        if ($intervenant->getPersonne() !== $this) {
            $intervenant->setPersonne($this);
        }

        return $this;
    }


}
