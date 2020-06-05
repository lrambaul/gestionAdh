<?php

namespace App\Controller;

use App\Repository\IntervenantRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Association;
use App\Controller\AssociationRepository;
use App\Entity\Structure;
use App\Entity\Adherent_Association;
use App\Entity\Adherent;
use App\Entity\Groupe;
use App\Entity\Personne;
use App\Entity\Intervenant;
use App\Repository\AdherentRepository;
use App\Repository\GroupeRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AcceuilController extends AbstractController
{

    /**
     * //première page, page d'acceuil après la page de connexion
     * @Route("/home", name="home")
     */
    public function home(){
            $personne = $this->getUser();
            dump($personne);
            return $this->render('accueil/home.html.twig', [
                'title' => "Bienvenue sur la page d'accueil",
            ]);
    }

    /**
     * @Route ("/accueil", name="Accueil")
     */
    public function accueil(){
        return $this->render('accueil.html.twig', [
        ]);
    }

}


?>