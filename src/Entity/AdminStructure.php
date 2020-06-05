<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminStructureRepository")
 */
class AdminStructure implements UserInterface
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Structure", inversedBy="adminStructures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $structure;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Personne", inversedBy="adminStructures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $apiToken;

    public function __construct()
    {
        $this->id = uuid_create(UUID_TYPE_RANDOM);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_ADMIN_STRUCTURE'];
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
}
