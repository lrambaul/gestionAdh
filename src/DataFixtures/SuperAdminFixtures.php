<?php

namespace App\DataFixtures;

use App\Entity\Personne;
use App\Entity\SuperAdmin;
use App\Entity\Adherent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Repository\PersonneRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SuperAdminFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder =$passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $personne = new Personne();
        $personne->setNomPers("Payen")
            ->setPrenomPers("Natacha")
            ->setMailPers("natacha-98@hotmail.fr")
            ->setMdp('nat');
        $hash = $this->passwordEncoder->encodePassword($personne, $personne->getMdp());
        $personne->setMdp($hash);
        $manager->persist($personne);
        $admin = new SuperAdmin();
        $admin->setPersonne($personne);
        $adh = new Adherent();
        $adh -> setAnnivAdh(\DateTime::createFromFormat('Y-m-d', "1998-09-21"))
            ->setNumLicence(456789)
            -> setTel(07654365);
        $manager->persist($admin);
        $manager->flush();
    }
}
