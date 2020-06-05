<?php

namespace App\Controller;

use App\Repository\IntervenantRepository;
use Doctrine\DBAL\Types\DateTimeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
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
use App\Controller\PersonneRepository;
use App\Entity\Intervenant;
use App\Repository\AdherentRepository;
use App\Repository\GroupeRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AssociationController extends AbstractController
{
    /**
     * Pour les prochaines fonctions nous utilisons les repository via les repository du SQL classique
     */


    /*******************************************************************************************************************
     * Fonctions pour le rôle ASSOCIATION
     *******************************************************************************************************************/

    /**
     * Permet d'afficher la page d'accueil d'un admin association
     * @Route("/homeassociation", name="homeassociation")
     * */

    public function homeassociation(){

        return $this->render('accueil/association/homeassociation.html.twig'); /*Renvoi vers le templates Home de l'admin structure*/

    }

    /**
     * Permet d'afficher le profil de l'association dont la personne connecté est responsable et de la personne qui est connecté
     * @Route("/profilassociation", name="profilassociation")
     * */
    public function profilassociation(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> F_profilpersonne($id_pers); /*Va chercher toutes les informations de la personne qui est connectée*/
        $repo_asso = $this->getDoctrine()->getRepository(Association::class)-> F_profilassociation($id_pers); /*Va chercher toutes les informations de l'association' qui est connecté*/

        return $this->render('accueil/association/profilassociation.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $repo_asso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'personnes' => $repo_pers, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Pour les prochaines fonctions nous utilisons les fonctionnalités de symfony (get, set, etc...)
     */

    /**
     * Permet de mettre à jour les données de l'association dont la personne connecté est responsable
     * @Route("/modifprofilAsso/{id}", name="modifprofilAssociation")
     * */
    public function modifprofilAsso(Request $request, EntityManagerInterface $em, $id){

        $association = $this->getDoctrine()->getRepository(Association::class)->find($id); /*Va chercher toutes les informations de l'association qui est connectée*/

            $form = $this->createFormBuilder($association) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $association (récupéré à la ligne précedente)*/
                ->add('adresse_asso', TextType::class, ['label' => "Adresse",]) /*Enregistre la variable Adresse du label dans la variable "adresse_asso" de la BDD*/
                ->add('mail_asso', TextType::class, ['label' => "Adresse e-mail",])
                ->add('tel_asso', TextType::class, ['label' => "Téléphone",])
                ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
                ->getForm();
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) { /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
                $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
                return $this->redirectToRoute('profilassociation'); /*Et on redirige vers la route d'affichage du profil*/
            }
        return $this->render('accueil/association/modifprofilAsso.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }


    /**
     * Permet de mettre à jour les données du profil d'un responsable d'association
     * @Route("/modifprofilPersAsso/{id}", name="modifprofilPersAssociation")
     * */
    public function modifprofilPersAsso( Request $request, EntityManagerInterface $em, $id){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne*/
            ->add('nom_pers',TextType::class,['label'  => "Nom",]) /*Enregistre la variable Nom du label dans la variable "nom_pers" de la BDD*/
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",])
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilassociation'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/association/modifprofilAsso.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour les données du profil d'un responsable d'association
     * @Route("/modifMDPprofilAssociation/{id}", name="modifMDPprofilAssociation")
     * */
    public function modifMDPprofilAssociation(UserPasswordEncoderInterface $passwordEncoder, Request $request, EntityManagerInterface $em, $id){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Va chercher toutes les informations de la personne qui est connectée*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne (récupéré à la ligne précedente)*/
            ->add('mdp',PasswordType::class,['label'  => "Mot de passe",]) /*Enregistre la variable Mot de passe du label dans la variable mdp de la BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $hash = $passwordEncoder->encodePassword($personne, $personne->getMdp()); /*Création d'un variable $hash qui contient le mot de passe hashé*/
            $personne->setMdp($hash); /*On lie le mot de passe hashé avec la personne dans la BDD*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilassociation'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/association/modifprofilAsso.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet d'afficher la liste des adhérents de l'association dont la personne connecté est responsable
     * @Route("/listeAdh", name="ListeAdh")
     * */
    public function ListeAdhAsso(){

        $ListeAsso= $this -> getUser()->getPersonne()-> getAssociations(); /*Récupère la liste des associations liées à la personne connectée*/

        return $this->render('accueil/association/listeAdh.html.twig', [ /*Et on redirige vers le template d'affichage des associations*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour le gérant de l'asso de mettre à jour les données du profil d'un adhérent
     * @Route("/modifprofilAdhpourAsso/{id}/{NumReturn}", name="modifprofilAdherentpourAsso")
     * */
    public function modifprofilAdhpourAsso(Request $request, EntityManagerInterface $em, $id, $NumReturn){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Va chercher toutes les informations de la personne qui est connectée*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne (récupéré à la ligne précedente)*/
            ->add('nom_pers',TextType::class,['label'  => "Nom",]) /*Enregistre la variable Nom du label dans la variable "nom_pers" de la BDD*/
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",])
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if($NumReturn==2){
                return $this->redirectToRoute('ListeAdh');}
            elseif($NumReturn==1){
                return $this->redirectToRoute('ListeGroupe');}
            elseif($NumReturn==3){
                return $this->redirectToRoute('GestionAdhStruct');}
            elseif($NumReturn==4){
                return $this->redirectToRoute('GestionGroupeStruct');}
        }
        return $this->render('accueil/association/modifprofilAdhpourAsso.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
    * Suppression d'un adhérent à une association par un admin asso
    * @Route("/SupprAdh/{idAdh}/{idAsso}", name="supprAdh")
    * */
    public function supprAdh(Request $request,EntityManagerInterface $em, $idAdh, $idAsso){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère les entitiés adhérent et association lié à l'id de l'adhérent et de l'asso sélectionnés
        $adherent = $entityManager-> getRepository(Adherent::class)->find($idAdh);
        $asso= $entityManager-> getRepository(Association::class)->find($idAsso);

        //////SUPRESSION DU LIEN AVEC LES GROUPES CONCERNES//////
        //On récupère la liste des groupes liés l'adhérent séléctionné
        $listeGroupe=$adherent->getGroupe();

        //On regarde les groupes qui sont liés à l'association séléctionné
        for($i=0;$i <= count($listeGroupe);++$i){
            //On vérifie si le Groupe existe
            if($listeGroupe[$i]!=null){
                //On vérifie si il est lié a l'asso que l'on veut
                $AssoduGroupe = $listeGroupe[$i]->getAssociation();
                if($AssoduGroupe == $asso){
                    //On supprime le lien entre l'adhérent et le groupe
                    $adherent->removeGroupe($listeGroupe[$i]);
                    $entityManager->flush();
                }
            }
        }

        //////SUPRESSION DU LIEN AVEC LES ASSOCIATIONS CONCERNEES//////
        $adherent->removeAsso($asso);
        $entityManager->flush();

        //On renvoi à la page de validation de la suppression
        return $this->redirectToRoute('supprAdhOK');
    }

    /**
     * Renvoie a une page de confirmation de la suppression de l'adhérent
     * @Route("/supprAdhOK", name="supprAdhOK")
     */
    public function supprAdhOK(){
        return $this->render('accueil/association/SuppAdhOK.html.twig', [
        ]);
    }

    /**
     * Permet d'afficher la liste des personne existante (ajout d'un adhérent ou d'un intervenant)
     * @Route("/ListePersonne/{idAsso}/", name="ListePersonne")
     * */
    public function ListePersonne($idAsso){

        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> FindAll(); /*Trouve la liste de toutes les personnes déjà existantes*/

            return $this->render('accueil/association/listePersonne.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
                'personnes' => $repo_pers, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
                'idAsso' => $idAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            ]);
    }


    /**
     * Permet pour le gérant de l'asso d'ajouter une personne
     * @Route("/AjoutPersonne/{idAsso}/", name="AjoutPersonne")
     * */
    public function AjoutPersonne(UserPasswordEncoderInterface $passwordEncoder, Request $request,EntityManagerInterface $em, $idAsso){

        //Création d'un objet personne pour pouvoir enregistrer ses données
        $personne=new Personne;

        //Création du formulaire (avec createFormBuilder) pour pouvoir enregistrer ses données
        $form = $this->createFormBuilder($personne)
            ->add('nom_pers',TextType::class,['label'  => "Nom",]) /*Enregistre la variable Nom du label dans la variable "nom_pers" de la BDD*/
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",])
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",])
            ->add('mdp',TextType::class,['label'  => "Mot de passe",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $hash = $passwordEncoder->encodePassword($personne, $personne->getMdp()); /*Création d'un variable $hash qui contient le mot de passe hashé*/
            $personne->setMdp($hash); /*On lie le mot de passe hashé avec la personne dans la BDD*/
            $em->persist($personne);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('ListePersonne', [ /*Et on redirige vers la route d'affichage de la liste des personnes*/
                'idAsso' => $idAsso,
            ]);
        }

        //Si le form n'est pas valide on supprime la personne
        dump($personne);
        return $this->render('accueil/association/acceuilformulaireAsso.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du from*/

    }

    /**
     * Permet pour le gérant de l'asso d'ajouter un adhérent
     * @Route("/AjoutAdh/{id}/{idAsso}", name="AjoutAdh")
     * */
    public function AjoutAdh(Request $request,EntityManagerInterface $em, $id, $idAsso){

        //Récupération des entité "personne" et "association" avec leur id
        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id);
        $asso = $this->getDoctrine()->getRepository(Association::class)->find($idAsso);

        //On vérifie que l'adhérent pour cette personne n'existe pas déjà
        $ifadherentexist = $personne->getAdherent();

        //Si l'adhérent n'existe pas
        if($ifadherentexist==null) {

            //Création d'un objet personne pour pouvoir enregistrer ses données
            $adherent = new Adherent();

            //Création du form pour enregistrer un adhérent
            $form = $this->createFormBuilder($adherent)
                ->add('anniv_adh', BirthdayType::class, ['label' => "Date d'anniversaire",])
                ->add('num_licence', TextType::class, ['label' => "Numéro de licence",])
                ->add('tel', TextType::class, ['label' => "Téléphonne",])
                ->add('adresse_adh', TextType::class, ['label' => "Adresse",])
                ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
                ->getForm();
            $form->handleRequest($request);

            // Seulement si le form est valide
            if ($form->isSubmitted() && $form->isValid()) {
                //On lie l'adhérent à la personne
                $adherent->setPersonne($personne);
                //On lie l'adhérent à l'association
                $adherent->addAsso($asso);

                // On persist et on flush avec la base de donnée
                $em->persist($adherent);
                $em->flush();

                //On lie la personne à l'adhérent nouvellement créé
                $personne->setAdherent($adherent);
                return $this->render('accueil/association/ajoutAdhOK.html.twig');
            }

            //Si le form n'est pas valide on supprime l'adhérent
            dump($adherent);
            //Et on retoure à la page 'listeAdh'
            return $this->render('accueil/association/acceuilformulaireAsso.html.twig', ['form' => $form->createView()]);

        }

        //Si l'adhérent existe
        elseif($ifadherentexist!=null){
            $id=$ifadherentexist->getId(); //On récupère l'id de l'adhérent
            $adherentexist = $this->getDoctrine()->getRepository(Adherent::class)->find($id); //On récupère toutes les informations de l'adhérent
            $adherentexist->addAsso($asso); //On lie l'adhérent à l'association
            $em->persist($adherentexist);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->render('accueil/association/ajoutAdhOK.html.twig'); /*Et on redirige vers la route d'affichage de confirmation de l'ajout d'un adhérent*/
        }

        else{
            return $this->redirectToRoute('homeassociation');
        }
    }


    /**
     * Permet d'afficher la liste des intervenants de l'association dont la personne connectée est responsable
     * @Route("/listeIntervenant", name="ListeIntervenant")
     * */
    public function ListeInterAsso(){

        $ListeAsso= $this -> getUser()->getPersonne()-> getAssociations(); /*Récupère toutes les associations liées à la personne connecté*/

        return $this->render('accueil/association/listeIntervenant.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }


    /**
     * Permet pour le gérant de l'asso de mettre à jour les données du profil d'un adhérent
     * @Route("/modifprofilInterpourAsso/{id}/{NumReturn}", name="modifprofilIntervenantpourAsso")
     * */
    public function modifprofilInterpourAsso(Request $request, EntityManagerInterface $em, $id, $NumReturn){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Récupère toutes les informations de la personne liées à l'id envoyé dans le bouton*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne*/
            ->add('nom_pers',TextType::class,['label'  => "Nom",]) /*Enregistre la variable Nom du label dans la variable nom_pers de la BDD*/
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",])
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/

            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if($NumReturn==2){
            return $this->redirectToRoute('ListeIntervenant');}
            elseif($NumReturn==1){
                return $this->redirectToRoute('ListeGroupe');}
            elseif($NumReturn==3){
                return $this->redirectToRoute('GestionInterStruct');}
            elseif($NumReturn==4){
                return $this->redirectToRoute('GestionGroupeStruct');}

        }
        return $this->render('accueil/association/modifprofilAdhpourAsso.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de supprimer un intervenant d'une association pour un admin asso
     * @Route("/supprInter/{idInter}/{idAsso}", name="supprInter")
     * */

    public function supprInter(Request $request,EntityManagerInterface $em, $idInter, $idAsso){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère les entitiés adhérent et associatio lié à l'id de l'adhérent et de l'asso sélectionnés
        $intervenant = $entityManager-> getRepository(Intervenant::class)->find($idInter);
        $asso= $entityManager-> getRepository(Association::class)->find($idAsso);

        //////SUPRESSION DU LIEN AVEC LES GROUPES CONCERNES//////
        //On récupère la liste des groupes liés à l'intervenant séléctionné
        $listeGroupe=$intervenant->getGroupes();


        //On parcourt la liste des groupes liés à l'intervenant
        for($i=0;$i <= count($listeGroupe);++$i){
            //On vérifie si le Groupe existe
            if($listeGroupe[$i]!=null){
                //On vérifie qu'il est lié à l'association que l'on veut ($asso)
                $AssoduGroupe = $listeGroupe[$i]->getAssociation();
                //Si l'asso lié au groupe est égale à l'asso correspondante à l'id envoyé dans le bouton
                if($AssoduGroupe == $asso){
                    //Si le groupe est lié à l'asso, alors on supprime le lien
                    $intervenant->removeGroupe($listeGroupe[$i]);
                    $entityManager->flush();
                }
            }
        }

        //////SUPRESSION DU LIEN AVEC LES ASSOCIATIONS CONCERNEES//////
        $intervenant->removeAssociation($asso);
        $entityManager->flush();

        //On renvoi à la page de validation de la suppression
        return $this->redirectToRoute('supprInterOK');
    }

    /**
     * Renvoie a une page de confirmation de la suppression de l'adhérent
     * @Route("/supprInterOK", name="supprInterOK")
     */
    public function supprInterOK(){
        return $this->render('accueil/association/SuppInterOK.html.twig', [ /*On redirige vers la route d'affichage de la liste des associations*/
        ]);
    }

    /**
     * Permet pour le gérant de l'asso d'ajouter un intervenant
     * @Route("/AjoutInter/{id}/{idAsso}", name="AjoutInter")
     * */
    public function AjoutInter(Request $request,EntityManagerInterface $em, $id, $idAsso){

        //Récupération des entité "personne" et "association" avec leur id
        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id);
        $asso = $this->getDoctrine()->getRepository(Association::class)->find($idAsso);

        //On vérifie que l'intervenant pour cette personne n'existe pas déjà
        $ifintervenantexist = $personne->getIntervenant();

        //Si l'intervenant n'existe pas déjà
        if($ifintervenantexist==null) {

            //Création d'un objet intervenant pour pouvoir enregistrer ses données
            $intervenant = new Intervenant();

            //Création du form pour enregistrer un intervenant
            $form = $this->createFormBuilder($intervenant)
                ->add('tel_inter', TextType::class, ['label' => "Téléphonne",])
                ->add('adresse_inter', TextType::class, ['label' => "Adresse",])
                ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
                ->getForm();
            $form->handleRequest($request);

            // Seulement si le form est valide
            if ($form->isSubmitted() && $form->isValid()) {
                //On lie l'intervenant à la personne
                $intervenant->setPersonne($personne);
                //On lie l'intervenant à l'association
                $intervenant->addAssociation($asso);

                // On persist et on flush avec la base de donnée
                $em->persist($intervenant);
                $em->flush();

                //On lie la personne à l'intervenant nouvellement créé
                $personne->setIntervenant($intervenant);
                return $this->render('accueil/association/ajoutInterOK.html.twig');
            }

            //Si le form n'est pas valide on supprime l'intervenant
            dump($intervenant);
            //Et on reste sur la page du formulaire
            return $this->render('accueil/association/acceuilformulaireAsso.html.twig', ['form' => $form->createView()]);

        }

        //Si l'intervenant existe déjà
        elseif($ifintervenantexist!=null){
            $ifintervenantexist->addAssociation($asso); //On lie l'intervenant à l'association sélectionné
            $em->persist($ifintervenantexist);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->render('accueil/association/ajoutInterOK.html.twig'); /*Et on redirige vers le template de confirmation d'ajout d'un intervenant*/
        }

        else{
            return $this->redirectToRoute('homeassociation');
        }
    }


    /**
     * Permet d'afficher la liste des groupes ainsi que des adhérents et des intervenant faisant parti de ses groupes pour l'association dont la personne connecté est responsable
     * @Route("/listeGroupe", name="ListeGroupe")
     * */
    public function ListeGroupeAsso(){

        $ListeAsso= $this -> getUser()->getPersonne()-> getAssociations(); //On récupère la liste des associations liées à la personne connectée

        return $this->render('accueil/association/listeGroupe.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour le gérant de l'association d'ajouter un groupe
     * @Route("/AjoutGroupe/{idAsso}/{NumReturn}", name="AjoutGroupe")
     * */
    public function AjoutGroupe(Request $request,EntityManagerInterface $em, $idAsso, $NumReturn){

        //Création d'un objet groupe pour pouvoir enregistrer ses données
        $groupe = new Groupe();

        //Je récupère l'entité association avec l'id envoyé ($idAsso)
        $Association = $this->getDoctrine()->getRepository(Association::class)->find($idAsso);

        //On lie le groupe à l'association
        $groupe->setAssociation($Association);

        //Création du form pour enregistrer un Groupe
        $form = $this->createFormBuilder($groupe)
            ->add('nom_groupe', TextType::class, ['label' => "Nom",])
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);

        // Seulement si le form est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // On persist et on flush avec la base de donnée
            $em->persist($groupe);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/

            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if ($NumReturn == 1) {
                return $this->redirectToRoute('ListeGroupe');
            } elseif ($NumReturn == 2) {
                return $this->redirectToRoute('GestionGroupeStruct');
            }
        }

        //Si le form n'est pas valide on supprime l'association
        dump($groupe);
        //Et on reste sur la page du formulaire
        return $this->render('accueil/association/acceuilformulaireAsso.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du form*/
    }

    /**
     * Supprimer un groupe complet pour l'admin structure
     * @Route("/SupprGroupeAsso/{idGroupe}/{NumReturn}", name="SupprGroupeAsso")
     **/

    public function SupprGroupeAsso(Request $request,EntityManagerInterface $em, $idGroupe, $NumReturn){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère l'entitiés groupe lié à l'id du groupe sélectionnés
        $Groupe= $entityManager-> getRepository(Groupe::class)->find($idGroupe);


        //////SUPRESSION DU LIEN AVEC LES INTERVENANTS CONCERNEES//////
        $listeIntervenants=$Groupe->getIntervenants();
        //On parcourt la liste des intervenants liés au groupe
        for($i=0;$i <= count($listeIntervenants);++$i){
            //On vérifie si l'intervenant existe
            if($listeIntervenants[$i]!=null){
                //Si l'intervenant est lié au groupe, alors on supprime le lien
                $Groupe->removeIntervenant($listeIntervenants[$i]);
                $entityManager->flush();
            }
        }


        //////SUPRESSION DU LIEN AVEC LES ADHERENTS CONCERNEES//////
        $listeAdherents=$Groupe->getAdherents();
        //On parcourt la liste des adhérents liés au groupe
        for($i=0;$i <= count($listeAdherents);++$i){
            //On vérifie si l'adhérent existe
            if($listeAdherents[$i]!=null){
                //Si l'adhérent est lié au groupe, alors on supprime le lien
                $Groupe->removeAdherent($listeAdherents[$i]);
                $entityManager->flush();
            }
        }

        //On supprime le groupe ce qui va automatiquement supprimer le lien avec l'association
        $entityManager->remove($Groupe);
        $entityManager->flush();

        //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
        if ($NumReturn == 1) {
            return $this->redirectToRoute('ListeGroupe');
        } elseif ($NumReturn == 2) {
            return $this->redirectToRoute('GestionGroupeStruct');
        }
    }

    /**
     * Permet de mettre à jour les données du groupe
     * @Route("/modifprofilGroupeAsso/{idGroupe}/{NumReturn}", name="modifprofilGroupeAsso")
     * */
    public function modifprofilGroupeAsso(Request $request, EntityManagerInterface $em, $idGroupe, $NumReturn){

        $Groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe); /*Récupère les informations du groupe lié à l'id envoyé dans le bouton*/

        //Création du form pour enregistrer un nouveau groupe
        $form = $this->createFormBuilder($Groupe)
            ->add('nom_groupe', TextType::class, ['label' => "Nom",])
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);

        // Seulement si le form est valide
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();

            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if ($NumReturn == 1) {
                return $this->redirectToRoute('ListeGroupe');
            } elseif ($NumReturn == 2) {
                return $this->redirectToRoute('GestionGroupeStruct');
            }
        }

        return $this->render('accueil/association/acceuilformulaireAsso.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du form*/
    }


    /**
     * Permet d'afficher la liste des Intervenants existants (ajout d'un intervenant dans un groupe)
     * @Route("/ListeIntervenantGroupe/{idGroupe}", name="ListeIntervenantGroupe")
     * */
    public function ListeIntervenantGroupe($idGroupe){

        $Groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe); /*Récupère les informations du groupe lié à l'id envoyé dans le bouton*/
        $ListeInter = $Groupe -> getAssociation() -> getIntervenant(); /*Récupère la liste des intervenants lié au groupe récupèré au-dessus*/

        return $this->render('accueil/association/listeIntervenantAjoutGroupe.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'intervenants' => $ListeInter, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'idGroupe' => $idGroupe, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour le gérant de l'asso d'ajouter un intervenant à un groupe
     * @Route("/AjoutInterGroupe/{id}/{idGroupe}/{NumReturn}", name="AjoutInterGroupe")
     * */
    public function AjoutInterGroupe(Request $request,EntityManagerInterface $em, $id, $idGroupe, $NumReturn){

        //Récupération des entité "intervenant" et "groupe" avec leur id
        $intervenant = $this->getDoctrine()->getRepository(Intervenant::class)->find($id);
        $groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe);

        //On vérifie que l'intervenant pour ce groupe n'existe pas déjà
        $ifintervenantexist = $groupe->getIntervenants();

        //Si l'intervenant existe déjà pour ce groupe
        if($ifintervenantexist==$intervenant) {
            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if ($NumReturn == 1) {
                return $this->redirectToRoute('ListeGroupe');
            } elseif ($NumReturn == 2) {
                return $this->redirectToRoute('GestionGroupeStruct');
            }
        }

        //Si l'intervenant n'existe pas déjà pour ce goupe
        elseif($ifintervenantexist!=$intervenant){
            $intervenant->addGroupe($groupe); //On lie l'intervenant au groupe
            $em->persist($intervenant);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if ($NumReturn == 1) {
                return $this->redirectToRoute('ListeGroupe');
            } elseif ($NumReturn == 2) {
                return $this->redirectToRoute('GestionGroupeStruct');
            }
        }

        else{
            return $this->redirectToRoute('homeassociation');
        }
    }

    /**
     * Supprimer un Intervenant d'un Groupe
     * @Route("/supprInterGroupe/{idInter}/{idGroupe}/{NumReturn}", name="supprInterGroupe")
     * */

    public function supprInterGroupe(Request $request,EntityManagerInterface $em, $idInter, $idGroupe, $NumReturn){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère les entitiés intervenant et groupe lié à l'id de l'intervenant et du groupe sélectionnés
        $intervenant = $entityManager-> getRepository(Intervenant::class)->find($idInter);
        $groupe= $entityManager-> getRepository(Groupe::class)->find($idGroupe);

        //////SUPRESSION DU LIEN AVEC LE GROUPE CONCERNE//////
        $intervenant->removeGroupe($groupe);
        $entityManager->flush(); /*Alors les informations sont mise à jour dans la BDD*/

        //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
        if ($NumReturn == 1) {
            return $this->redirectToRoute('ListeGroupe');
        } elseif ($NumReturn == 2) {
            return $this->redirectToRoute('GestionGroupeStruct');
        }
    }

    /**
     * Permet d'afficher la liste des Adhérents existants (ajout d'un adhérent dans un groupe)
     * @Route("/ListeAdhGroupe/{idGroupe}", name="ListeAdhGroupe")
     * */
    public function ListeAdhGroupe($idGroupe){

        $Groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe); /*Récupère toutes les informations du groupe liée à l'id envoyé par le bouton*/
        $ListeAdh = $Groupe -> getAssociation() -> getAdherents(); /*Récupère toutes la liste des adhérents liés au groupe récupéré au-dessus*/

        return $this->render('accueil/association/listeAdhAjoutGroupe.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'adherents' => $ListeAdh, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'idGroupe' => $idGroupe, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour le gérant de l'asso d'ajouter un adherent à un groupe
     * @Route("/AjoutAdhGroupe/{id}/{idGroupe}/{NumReturn}", name="AjoutAdhGroupe")
     * */
    public function AjoutAdhGroupe(Request $request,EntityManagerInterface $em, $id, $idGroupe, $NumReturn){

        //Récupération des entité "adherent" et "groupe" avec leur id
        $adherent = $this->getDoctrine()->getRepository(Adherent::class)->find($id);
        $groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe);

        //On vérifie que l'adherent pour ce groupe n'existe pas déjà
        $ifadherentexist = $groupe-> getAdherents();

        //Si l'adhérent existe déjà pour ce groupe
        if($ifadherentexist==$adherent) {
            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if ($NumReturn == 1) {
                return $this->redirectToRoute('ListeGroupe');
            } elseif ($NumReturn == 2) {
                return $this->redirectToRoute('GestionGroupeStruct');
            }
        }

        //Si l'adhérent n'existe pas déjà pour ce groupe
        elseif($ifadherentexist!=$adherent){
            $adherent->addGroupe($groupe); //On lie l'adhérent au groupe
            $em->persist($adherent);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/

            //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
            if ($NumReturn == 1) {
                return $this->redirectToRoute('ListeGroupe');
            } elseif ($NumReturn == 2) {
                return $this->redirectToRoute('GestionGroupeStruct');
            }
        }

        else{
            return $this->redirectToRoute('homeassociation');
        }
    }

    /**
     * Supprimer un Adhérent d'un Groupe
     * @Route("/supprAdhGroupe/{idAdh}/{idGroupe}/{NumReturn}", name="supprAdhGroupe")
     * */

    public function supprAdhGroupe(Request $request,EntityManagerInterface $em, $idAdh, $idGroupe, $NumReturn){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère les entitiés adherent et groupe lié à l'id de l'intervenant et du groupe sélectionnés
        $adherent = $entityManager-> getRepository(Adherent::class)->find($idAdh);
        $groupe= $entityManager-> getRepository(Groupe::class)->find($idGroupe);

        //////SUPRESSION DU LIEN AVEC LE GROUPE CONCERNE//////
        $adherent->removeGroupe($groupe);
        $entityManager->flush(); /*Mise à jour dans la BDD*/

        //On renvoie aux differentes routes en fonction du NumReturn envoyé par le bouton
        if ($NumReturn == 1) {
            return $this->redirectToRoute('ListeGroupe');
        } elseif ($NumReturn == 2) {
            return $this->redirectToRoute('GestionGroupeStruct');
        }
    }


}


?>