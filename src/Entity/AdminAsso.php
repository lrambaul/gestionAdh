<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminAssoRepository")
 */
class AdminAsso implements UserInterface
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Association", inversedBy="adminsAsso")
     * @ORM\JoinColumn(nullable=false)
     */
    private $association;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Personne", inversedBy="adminAssos")
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

    public function getAssociation(): ?Association
    {
        return $this->association;
    }

    public function setAssociation(?Association $association): self
    {
        $this->association = $association;

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
        return ['ROLE_ADMIN_ASSOCIATION'];
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
