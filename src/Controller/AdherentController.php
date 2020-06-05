<?php

namespace App\Controller;

use App\Repository\IntervenantRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
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
use App\Repository\PersonneRepository;
use App\Repository\GroupeRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdherentController extends AbstractController
{

    /**
     * Pour les prochaines fonctions nous utilisons les repository via les repository du SQL classique
     */

    /*******************************************************************************************************************
     * Fonctions pour le rôle ADHERENT
     *******************************************************************************************************************/

    /**
     * Permet d'afficher la page d'accueil d'un adhérent
     * @Route("/homeadherent", name="homeadherent")
     * */

     public function homeadherent(){
         return $this->render('accueil/adherent/homeadherent.html.twig'); /*Renvoi vers le templates Home de l'adérent*/

     }

    /**
     * Permet d'afficher le profil de l'adhérent qui est connecté
     * @Route("/profilpersonne", name="profilpersonne")
     * */

    public function profilpersonne(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> F_profilpersonne($id_pers); /*Va chercher toutes les informations de la personne qui est connectée*/
        $repo_adh = $this->getDoctrine()->getRepository(Adherent::class)-> F_profiladherent($id_pers); /*Va chercher toutes les informations de l'adherent qui est connecté*/

        return $this->render('accueil/adherent/profilpersonne.html.twig', [ /*Envoie les informations vers le templates d'affichage*/

            'personnes' => $repo_pers,  /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'adherents' => $repo_adh /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet d'afficher la liste des associations liées à l'adhérent connecté
     * @Route("/assoadherent", name="associationadherent")
     * */
    public function associationadherent(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_adh = $this->getDoctrine()->getRepository(Adherent::class)-> F_IDadherentpers($id_pers); /*Va chercher l'id adhérent de la personne qui est connectée*/
        $repo_asso = $this->getDoctrine()->getRepository(Association::class)-> F_associationAdh($repo_adh[0]["id"]); /*Va chercher toutes les informations des associations liées à la personne qui est connectée*/
        dump($repo_asso);
        return $this->render('accueil/adherent/assoadherent.html.twig', [ /*Envoie les informations par le templates d'affichage de la liste des associations*/

            'associations' => $repo_asso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet de mettre à jour les données du profil d'un adhérent
     * @Route("/modifprofilAdh/{id}", name="modifprofilAdherent")
     * */
    public function modifprofilAdh(Request $request, EntityManagerInterface $em, AdherentRepository $repo, $id){

        $adherent = $repo->find($id);  /*Trouve l'id de la personne qui est connectée*/
        $form = $this->createFormBuilder($adherent)  /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $adherent*/
            ->add('adresse_adh',TextType::class,['label'  => "Adresse",]) /*Enregistre la variable Adresse du label dans la variable "adresse_adh" de la BDD*/
            ->add('tel',TextType::class,['label'  => "Téléphone",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->merge($adherent);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilpersonne'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/adherent/modifprofilAdh.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour le mail du profil d'un adhérent
     * @Route("/modifinfopersonne/{id}", name="modifinfopersonne")
     * */
    public function modifinfopersonne( Request $request, EntityManagerInterface $em, PersonneRepository $repo, $id){

        $personne = $repo->find($id);  /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne)  /*Utilise la fonction createFormBuilder pour créer un forme (qui permettera d'entrer les informations)*/
        ->add('mail_pers',TextType::class,['label'  => "Adresse mail",]) /*Enregistre la variable Adresse mail du label dans la variable adresse_adh BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer']) /*Bouton pour enregistrer les informations du form*/
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/

            $em->merge($personne);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilpersonne'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/adherent/modifprofilPersonne.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification*/
    }

    /**
     * Permet de mettre à jour le mot de passe du profil d'un adhérent
     * @Route("/modifMDPprofilAdherent/{id}", name="modifMDPprofilAdherent")
     * */
    public function modifMDPprofilAdherent(UserPasswordEncoderInterface $passwordEncoder, Request $request, EntityManagerInterface $em, PersonneRepository $repo, $id){

        $personne = $repo->find($id);  /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne)  /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne*/
        ->add('mdp',PasswordType::class,['label'  => "Mot de passe", ]) /*Enregistre la variable Mot de passe du label dans la variable mdp de la BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $hash = $passwordEncoder->encodePassword($personne, $personne->getMdp()); /*Création d'un variable $hash qui contient le mot de passe hashé*/
            $personne->setMdp($hash); /*On lie le mot de passe hashé avec la personne dans la BDD*/
            $em->merge($personne);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilpersonne'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/adherent/modifprofilPersonne.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet d'afficher les groupes auxquels appartient l'adhérent connecté
     * @Route("/groupeadherent", name="groupeadherent")
     * */
    public function groupeadherent(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Trouve l'id de la personne qui est connectée*/
        $repo_adh = $this->getDoctrine()->getRepository(Adherent::class)-> F_IDadherentpers($id_pers); /*Va chercher l'id adhérent de la personne qui est connectée*/
        $repo_grp = $this->getDoctrine()->getRepository(Groupe::class)-> F_GroupeAdh($repo_adh[0]["id"]); /*Va chercher tout les groupes liés à la personne qui est connectée*/

        return $this->render('accueil/adherent/groupeadherent.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'groupes' => $repo_grp, /*Envoie les informations récupérées par la fonction associée par la variable utilisé dans le templates*/
        ]);
    }

}


?>