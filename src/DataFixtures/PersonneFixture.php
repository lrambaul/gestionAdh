<?php

namespace App\DataFixtures;

use App\Entity\Adherent;
use App\Entity\AdminAsso;
use App\Entity\AdminStructure;
use App\Entity\Association;
use App\Entity\Intervenant;
use App\Entity\Structure;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Personne;
use App\Entity\SuperAdmin;



class PersonneFixture extends Fixture
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
                ->setMailPers("natacha.payen98@gmail.com");
        $hash = $this->passwordEncoder->encodePassword($personne, 'nat');
        $personne->setMdp($hash);


        $personne1 = new Personne();
        $personne1->setNomPers("Castillo")
            ->setPrenomPers("Noémie")
            ->setMailPers("castillo.noemie.stl@gmail.com")
            ->setMdp('nono');
        $hash = $this->passwordEncoder->encodePassword($personne1, $personne1->getMdp());
        $personne1->setMdp($hash);

        $structure = new Structure();
        $structure-> setNomStructure("CDOS");

        $admin = new AdminStructure();
        $admin->setPersonne($personne1)
            ->setStructure($structure);
        $personne1->addStructure($structure);
        $structure->addPersonne($personne1);

        $personne2 = new Personne();
        $personne2->setNomPers("Barbe")
            ->setPrenomPers("Fanny")
            ->setMailPers("fanny.barbe05@gmail.com")
            ->setMdp('fan');
        $hash = $this->passwordEncoder->encodePassword($personne2, $personne2->getMdp());
        $personne2->setMdp($hash);

        $personne3 = new Personne();
        $personne3->setNomPers("Bouvier")
            ->setPrenomPers("Julie")
            ->setMailPers("julie.bouvier1996@gmail.com")
            ->setMdp('juju');
        $hash = $this->passwordEncoder->encodePassword($personne3, $personne3->getMdp());
        $personne3->setMdp($hash);

        $asso = new Association();
        $asso->setStructure($structure)
            ->setNomAsso("Gphy")
            ->setMailAsso("gphy@gmail.com")
            ->setTelAsso(9757586422)
            ->setFederationAsso("Gphiste")
            ->setComiteAsso("Université de Poitiers")
            ->setAdresseAsso("Batiment B2 Poitiers");

        $intervenant = new Intervenant();
        $intervenant->setPersonne($personne3)
            ->setTelInter(8646864084)
            ->setAdresseInter("Chez elle")
            ->addAssociation($asso);

        $asso->addIntervenant($intervenant);

        $adh = new Adherent();
        $adh -> setAnnivAdh(\DateTime::createFromFormat('Y-m-d', "1998-03-05"))
            ->setNumLicence(456790)
            -> setTel(0644124712)
            -> setAdresseAdh("7 rue des Palmiers 13008 Marseille")
            -> setPersonne($personne2)
            ->addAsso($asso);



        $structure1 = new Structure();
        $structure1->setNomStructure("GPhy");

        $asso1 = new Association();
        $asso1->setStructure($structure1)
            ->setNomAsso("GphyFight")
            ->setMailAsso("gphy.fight@gmail.com")
            ->setTelAsso(0532451225)
            ->setFederationAsso("UnivFight")
            ->setAdresseAsso("4 Boulevard des Prunes 86000 Poitiers");

        $admin1 = new AdminAsso();
        $admin1->setPersonne($personne1)
            ->setAssociation($asso1);

        $personne1->addAssociation($asso1);
        $asso1->addPersonne($personne1);

        $manager->persist($personne);
        $manager->persist($structure);
        $manager->persist($personne1);
        $manager->persist($admin);
        $manager->persist($personne2);
        $manager->persist($personne3);
        $manager->persist($asso);
        $manager->persist($intervenant);
        $manager->persist($adh);
        $manager->persist($structure1);
        $manager->persist($asso1);
        $manager->persist($admin1);

        $manager->flush();
    }
}
