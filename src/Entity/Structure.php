<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StructureRepository")
 */
class Structure
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
    private $nom_structure;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Personne", inversedBy="structures")
     */
    private $personnes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Association", mappedBy="structure")
     */
    private $associations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AdminStructure", mappedBy="structure")
     */
    private $adminStructures;

    public function __construct()
    {
        $this->id = uuid_create(UUID_TYPE_RANDOM);
        $this->personnes = new ArrayCollection();
        $this->associations = new ArrayCollection();
        $this->adminStructures = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStructure(): ?string
    {
        return $this->nom_structure;
    }

    public function setNomStructure(string $nom_structure): self
    {
        $this->nom_structure = $nom_structure;

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
            $association->setStructure($this);
        }

        return $this;
    }

    public function removeAssociation(Association $association): self
    {
        if ($this->associations->contains($association)) {
            $this->associations->removeElement($association);
            // set the owning side to null (unless already changed)
            if ($association->getStructure() === $this) {
                $association->setStructure(null);
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
            $adminStructure->setStructure($this);
        }

        return $this;
    }

    public function removeAdminStructure(AdminStructure $adminStructure): self
    {
        if ($this->adminStructures->contains($adminStructure)) {
            $this->adminStructures->removeElement($adminStructure);
            // set the owning side to null (unless already changed)
            if ($adminStructure->getStructure() === $this) {
                $adminStructure->setStructure(null);
            }
        }

        return $this;
    }
}
