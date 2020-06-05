<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\SuperAdminRepository")
 */
class SuperAdmin implements UserInterface
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
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $apiToken;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personne", inversedBy="superAdmin", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getRoles()
    {
        return ['ROLE_SUPER_ADMIN'];
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


    public function __construct()
    {
        $this->id = uuid_create(UUID_TYPE_RANDOM);
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
