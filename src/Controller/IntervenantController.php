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
use App\Repository\GroupeRepository;
use App\Repository\PersonneRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class IntervenantController extends AbstractController
{

    /**
     * Pour les prochaines fonctions nous utilisons les repository via les repository du SQL classique
     */


    /*******************************************************************************************************************
     * Fonctions pour le rôle INTERVENANT
     *******************************************************************************************************************/

    /**
     * Permet d'afficher la page d'accueil d'un intervenant
     * @Route("/homeintervenant", name="homeintervenant")
     * */

    public function homeintervenant(){

        return $this->render('accueil/intervenant/homeintervenant.html.twig'); /*Renvoi vers le templates Home de l'intervenant*/

    }

    /**
     * Permet d'afficher le profil de l'intervenant connecté
     * @Route("/profilintervenant", name="profilintervenant")
     * */
    public function profilintervenant(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> F_profilpersonne($id_pers); /*Va chercher toutes les informations de la personne qui est connectée*/
        $repo_inter = $this->getDoctrine()->getRepository(Intervenant::class)-> F_profilinternvenant($id_pers); /*Va chercher toutes les informations de l'intervenant qui est connecté*/

        return $this->render('accueil/intervenant/profilintervenant.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'personnes' => $repo_pers, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'intervenants' => $repo_inter /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet de mettre à jour les données de l'intervenant connecté
     * @Route("/modifprofilInter/{id}", name="modifprofilIntervenant")
     * */
    public function modifprofilInter(Request $request, EntityManagerInterface $em, IntervenantRepository $repo, $id){

        $intervenant = $this->getUser()->getPersonne()->getIntervenant(); /*Trouve les informations  de l'intervenant qui est connectée*/
        $form = $this->createFormBuilder($intervenant)  /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $intervenant*/
            ->add('adresse_inter',TextType::class,['label'  => "Adresse",]) /*Enregistre la variable Adresse du label dans la variable "adresse_inter" de la BDD*/
            ->add('tel_inter',TextType::class,['label'  => "Téléphone",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->merge($intervenant);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilintervenant'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/intervenant/modifprofilInter.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour l'adresse mail d'un intervenant (info de la table personne)
     * @Route("/modifinfopers/{id}", name="modifinfopers")
     * */
    public function modifinfopers(UserPasswordEncoderInterface $passwordEncoder,Request $request, EntityManagerInterface $em, PersonneRepository $repo, $id){

        $personne = $repo->find($id);  /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne)  /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne*/
        ->add('mail_pers',TextType::class,['label'  => "Adresse mail",]) /*Enregistre la variable Adresse mail du label dans la variable "mail_pers" BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->merge($personne);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilintervenant'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/intervenant/modifprofilPers.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour le mot de passe d'un intervenant
     * @Route("/modifMDPprofilIntervenant/{id}", name="modifMDPprofilIntervenant")
     * */
    public function modifMDPprofilIntervenant(UserPasswordEncoderInterface $passwordEncoder,Request $request, EntityManagerInterface $em, PersonneRepository $repo, $id){

        $personne = $repo->find($id);  /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne)  /*Utilise la fonction createFormBuilder*/
            ->add('mdp',PasswordType::class,['label'  => "Mot de passe",]) /*Enregistre la variable Mot de passe du label dans la variable "mdp" BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $hash = $passwordEncoder->encodePassword($personne, $personne->getMdp());
            $personne->setMdp($hash); /*Création d'un variable $hash qui contient le mot de passe hashé*/
            $em->merge($personne); /*On lie le mot de passe hashé avec la personne dans la BDD*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilintervenant'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/intervenant/modifprofilPers.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet d'afficher les associations liées à l'intevenant connecté
     * @Route("/assointervenant", name="associationintervenant")
     * */
    public function associationintervenant(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_inter = $this->getDoctrine()->getRepository(Intervenant::class)-> F_IntervenantPers($id_pers); /*Va chercher l'id adhérent de la personne qui est connectée*/
        $repo_asso = $this->getDoctrine()->getRepository(Association::class)-> F_associationInter($repo_inter[0]["id"]); /*Va chercher toutes les informations des associations liées à la personne qui est connectée*/
        dump($repo_inter[0]["id"]);
        return $this->render('accueil/intervenant/assointervenant.html.twig', [ /*Et on redirige vers le template d'affichage des associations*/
            'associations' => $repo_asso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Pour les prochaines fonctions nous utilisons les fonctionnalités de symfony (get, set, etc...)
     */

    /**
     * Permet d'afficher les groupes liées à l'intevenant connecté
     * @Route("/groupeintervenant", name="groupeintervenant")
     * */
    public function groupeintervenant(){

        $groupes= $this -> getUser()->getPersonne()-> getIntervenant()->getGroupes(); /*Va chercher les groupes liés à la personne qui est connectée*/

        return $this->render('accueil/intervenant/groupeintervenant.html.twig', [ /*Et on redirige vers le template d'affichage des groupes*/
            'groupes' => $groupes, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

}


?>