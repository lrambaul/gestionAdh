<?php

namespace App\Controller;

use App\Repository\IntervenantRepository;
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
use App\Entity\Intervenant;
use App\Repository\AdherentRepository;
use App\Repository\GroupeRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class StructureController extends AbstractController
{

    /**
     * Pour les prochaines fonctions nous utilisons les repository via les repository du SQL classique
     */

    /*******************************************************************************************************************
     * Fonctions pour le rôle STRUCTURE
     *******************************************************************************************************************/

    /**
     * Permet d'afficher la page d'accueil d'une structure
     * @Route("/homestructure", name="homestructure")
     * */

    public function homestructure(){

        return $this->render('accueil/structure/homestructure.html.twig'); /*Renvoi vers le templates Home de l'admin structure*/

    }

    /* Profil
    *******************************************************************************************************************/
    /**
     * Permet d'afficher les informations de la structure dont la personne connecté est responsable et de la personne qui est connecté
     * @Route("/profilstructure", name="profilstructure")
     * */
    public function profilstructure(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> F_profilpersonne($id_pers); /*Va chercher toutes les informations de la personne qui est connectée*/
        $repo_struc = $this->getDoctrine()->getRepository(Structure::class)-> F_profilstructure($id_pers); /*Va chercher toutes les informations de la structure qui est connecté*/
        dump($repo_pers);
        return $this->render('accueil/structure/profilstructure.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'structures' => $repo_struc, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'personnes' => $repo_pers, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet d'afficher toutes les associations liées à la structure dont la personne qui est connectée est responsable (l'admin struture)
     * @Route("/assostructure", name="associationstructure")
     * */
    public function associationstructure(){
        $id_pers = $this->getUser()->getPersonne()->getId(); /*Va chercher l'id de la personne qui est connecté*/
        $repo_struct = $this->getDoctrine()->getRepository(Structure::class)-> F_profilstructure($id_pers); /*Va chercher toutes les informations de la personne qui est connectée*/
        $repo_asso = $this->getDoctrine()->getRepository(Association::class)-> F_associationStruct($repo_struct); /*Va chercher toutes les informations de la structure qui est connecté*/

        return $this->render('accueil/structure/assostructure.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $repo_asso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Pour les prochaines fonctions nous utilisons les fonctionnalités de symfony (get, set, etc...)
     */

    /**
     * Permet de mettre à jour les données du profil d'une structure (Juste le nom)
     * @Route("/modifprofilStruct/{id}", name="modifprofilStructure")
     * */
    public function modifprofilStruct(Request $request, EntityManagerInterface $em, $id){

        $structure = $this->getDoctrine()->getRepository(Structure::class)->find($id); /*Va chercher toutes les informations de structure liée à la personne qui est connectée*/

        $form = $this->createFormBuilder($structure) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $structure (récupéré à la ligne précedente)*/
            ->add('nom_structure', TextType::class, ['label' => "Nom",]) /*Enregistre la variable Nom du label dans la variable "nom_structure" de la BDD*/
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilstructure'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/structure/modifprofilStruct.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour les données d'un responsable de structure (admin structure)
     * @Route("/modifprofilPersStruct/{id}", name="modifprofilPersStructure")
     * */
    public function modifprofilPersStruct(Request $request, EntityManagerInterface $em, $id){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Va chercher toutes les informations de la personne qui est connectée*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne (récupéré à la ligne précedente)*/
            ->add('nom_pers',TextType::class,['label'  => "Nom",]) /*Enregistre la variable Nom du label dans la variable "nom_pers" de la BDD*/
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",]) /*Enregistre la variable Prénom du label dans la variable "prenom_pers" de la BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilstructure'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/structure/modifprofilStruct.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour le mot de passe d'un responsable de structure
     * @Route("/modifMDPprofilStructure/{id}", name="modifMDPprofilStructure")
     * */
    public function modifMDPprofilStructure(UserPasswordEncoderInterface $passwordEncoder, Request $request, EntityManagerInterface $em, $id){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne*/
            ->add('mdp',PasswordType::class,['label'  => "Mot de passe",]) /*Enregistre la variable Mot de passe du label dans la variable mdp de la BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $hash = $passwordEncoder->encodePassword($personne, $personne->getMdp()); /*Création d'un variable $hash qui contient le mot de passe hashé*/
            $personne->setMdp($hash); /*On lie le mot de passe hashé avec la personne dans la BDD*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilstructure'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/structure/modifprofilStruct.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de mettre à jour le mail d'un responsable de structure
     * @Route("/modifmailprofilStructure/{id}", name="modifmailprofilStructure")
     * */
    public function modifmailprofilStructure(Request $request, EntityManagerInterface $em, $id){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Trouve l'id de la personne qui est connecté*/
        $form = $this->createFormBuilder($personne) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $personne*/
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",]) /*Enregistre la variable Adresse e-mail du label dans la variable mail_pers de la BDD*/
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('profilstructure'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/structure/modifprofilStruct.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /* Gestion Asso et Administrateur
    *******************************************************************************************************************/

    /**
     * Permet d'afficher la liste des associations et des admin des associations dont la personne connectée est responsable (admin structure)
     * @Route("/ListeAsso", name="ListeAsso")
     * */
    public function ListeAsso(){

        $ListeStructure= $this -> getUser()->getPersonne()-> getStructures(); /*Va chercher toutes les structures liée à la personne qui est connectée*/
        $ListeAsso = $ListeStructure[0] -> getAssociations(); /*Récupère toutes les associations liées à la structure (récupèré à la ligne précédente)*/

        return $this->render('accueil/structure/listeAsso.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisé dans le templates*/
        ]);
    }

    /**
     * Permet de mettre à jour les données de l'association liée à la structure dont la personne connectée est responsable
     * @Route("/modifprofilAssociationRégion/{id}", name="modifprofilAssociationRégion")
     * */
    public function modifprofilAsso(Request $request, EntityManagerInterface $em, $id){

        $association = $this->getDoctrine()->getRepository(Association::class)->find($id); /*Récupère toutes les associations liées à la structure (récupèré à la ligne précédente)*/

        $form = $this->createFormBuilder($association) /*Utilise la fonction createFormBuilder pour modifier les informations liées à la variable $association*/
            ->add('adresse_asso', TextType::class, ['label' => "Adresse",]) /*Enregistre la variable Adresse du label dans la variable adresse_asso de la BDD*/
            ->add('mail_asso', TextType::class, ['label' => "Adresse e-mail",])
            ->add('tel_asso', TextType::class, ['label' => "Téléphone",])
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('ListeAsso'); /*Et on redirige vers la route d'affichage du profil*/
        }
        return $this->render('accueil/structure/acceuilformulaireStructure.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du profil*/
    }

    /**
     * Permet de supprimer un admin asso d'une association
     * @Route("/SupprAdmin/{idPers}/{idAsso}", name="supprAdmin")
     * */
    public function supprAdmin(Request $request,EntityManagerInterface $em, $idPers, $idAsso){

        $entityManager = $this->getDoctrine()->getManager();

        //On récupère les entitées personne et association liées à l'id de la personne admin et de l'asso sélectionnés
        $personneAdmin = $entityManager-> getRepository(Personne::class)->find($idPers);
        $asso= $entityManager-> getRepository(Association::class)->find($idAsso);


        //////SUPRESSION DU LIEN AVEC LES ASSOCIATIONS CONCERNEES//////
        $personneAdmin->removeAssociation($asso); /*Supression de l'administrateur de l'association avec l'association*/
        $entityManager->flush(); /*Mise à jour avec la BDD*/

        //On renvoi à la page de validation de la suppression
        return $this->redirectToRoute('supprAdminOK');
    }

    /**
     * Confirmation de la suppression d'un administrateur asso
     * @Route("/supprAdminOK", name="supprAdminOK")
     */
    public function supprAdminOK(){
        return $this->render('accueil/structure/SuppAdminOK.html.twig', [ /*Redirection vers une page de confirmation de supression*/
        ]);
    }

    /**
     * Permet pour le gérant de la structure de mettre à jour les données du profil d'un adhérent
     * @Route("/modifprofilAdminpourAsso/{id}", name="modifprofilAdminpourAsso")
     * */
    public function modifprofilAdminpourAsso(Request $request, EntityManagerInterface $em, $id){

        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id); /*Trouve les informations de l'adhérent séléctionné grace au bouton*/
        $form = $this->createFormBuilder($personne)
            ->add('nom_pers',TextType::class,['label'  => "Nom",]) /*Enregistre la variable Nom du label dans la variable "nom_pers" de la BDD*/
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",])
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('ListeAsso'); /*Et on redirige vers la route d'affichage de la liste des associations*/
        }
        return $this->render('accueil/structure/modifprofilAdminpourAsso.html.twig', ['formModifProfil' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du from*/
    }

    /**
     * Permet d'afficher la liste des personnes déjà existantes (pour l'ajout d'un admin asso)
     * @Route("/ListePersonneRégion/{idAsso}", name="ListePersonneRégion")
     * */
    public function ListePersonneRégion($idAsso){

        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> FindAll(); /*Trouve la liste de toutes les personnes déjà existantes*/

        return $this->render('accueil/structure/listePersonneRégion.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'personnes' => $repo_pers, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'idAsso' => $idAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour l'admin région d'ajouter un admin Asso
     * @Route("/AjoutAdmin/{id}/{idAsso}", name="AjoutAdmin")
     * */
    public function AjoutAdmin(Request $request,EntityManagerInterface $em, $id, $idAsso){

        //Récupération des entité "personne" et "association" avec leur id
        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id);
        $asso = $this->getDoctrine()->getRepository(Association::class)->find($idAsso);

                //On lie la personne à l'association
                $personne->addAssociation($asso);

                // On persist et on flush avec la base de donnée
                $em->persist($personne);
                $em->flush();

                return $this->render('accueil/structure/ajoutAdminOK.html.twig'); /*On renvoie vers le templates de validation de l'ajout*/
    }

    /**
     * Permet pour le gérant de l'admin d'ajouter une personne
     * @Route("/AjoutPersonneRégion/{idAsso}", name="AjoutPersonneRégion")
     * */
    public function AjoutPersonneRégion(UserPasswordEncoderInterface $passwordEncoder,Request $request,EntityManagerInterface $em, $idAsso){

        //Création d'un objet personne pour pouvoir enregistrer ses données
        $personne=new Personne;

        //Création du formulaire (avec createFormBuilder) pour pouvoir enregistrer ses données
        $form = $this->createFormBuilder($personne)
            ->add('nom_pers',TextType::class,['label'  => "Nom",])
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
            return $this->redirectToRoute('ListePersonneRégion', [ /*Et on redirige vers la route d'affichage de la liste des personne*/
                'idAsso' => $idAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            ]);
        }

        //Si le form n'est pas valide on supprime la personne
        dump($personne);
        return $this->render('accueil/structure/acceuilformulaireStructure.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du form*/

    }

    /**
     * Supprimer une association complete pour l'admin structure
     * @Route("/SupprAssociationRégion/{idAsso}", name="SupprAssociationRégion")
     **/

    public function SupprAssociationRégion(Request $request,EntityManagerInterface $em, $idAsso){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère l'entitiés associatio lié à l'id de l'asso sélectionnés
        $asso= $entityManager-> getRepository(Association::class)->find($idAsso);


        //////SUPRESSION DU LIEN AVEC LES GROUPES CONCERNES//////
        //On récupère la liste des groupes liés à l'association séléctionné
        $listeGroupe=$asso->getGroupes();

        //On parcourt la liste des groupes liés à l'association
        for($i=0;$i <= count($listeGroupe);++$i){
            //On vérifie si le Groupe existe
            if($listeGroupe[$i]!=null){
                    //Si le groupe est lié à l'asso, alors on supprime le lien
                    /*$asso->removeGroupe($listeGroupe[$i]);*/
                    $entityManager->remove($listeGroupe[$i]);
                    $entityManager->flush();
            }
        }

        //////SUPRESSION DU LIEN AVEC LES INTERVENANTS CONCERNEES//////
        $listeIntervenants=$asso->getIntervenant();
        //On parcourt la liste des intervenants liés à l'association
        for($i=0;$i <= count($listeIntervenants);++$i){
            //On vérifie si l'intervenant existe
            if($listeIntervenants[$i]!=null){
                //Si l'intervenant est lié à l'asso, alors on supprime le lien
                $asso->removeIntervenant($listeIntervenants[$i]);
                $entityManager->flush();
            }
        }


        //////SUPRESSION DU LIEN AVEC LES ADHERENTS CONCERNEES//////
        $listeAdherents=$asso->getAdherents();
        //On parcourt la liste des adhérents liés à l'association
        for($i=0;$i <= count($listeAdherents);++$i){
            //On vérifie si l'adhérent existe
            if($listeAdherents[$i]!=null){
                //Si l'adhérent est lié à l'asso, alors on supprime le lien
                $asso->removeAdherent($listeAdherents[$i]);
                $entityManager->flush();
            }
        }

        /////SUPRESSION DU LIEN AVEC LES ADMINISTRATEURS CONCERNEES//////
        $listeAdmin=$asso->getPersonnes();
        //On parcourt la liste des administrateurs liés à l'association
        for($i=0;$i <= count($listeAdmin);++$i){
            //On vérifie si l'administrateur existe
            if($listeAdmin[$i]!=null){
                //Si l'administrateur(personne) est lié à l'asso, alors on supprime le lien
                $asso->removePersonne($listeAdmin[$i]);
                $entityManager->flush();
            }
        }

        /////SUPRESSION DU LIEN AVEC LA STRUCTURE CONCERNEE//////
        //On supprime l'association ce qui va automatiquement supprimer le lien avec la structure
        $entityManager->remove($asso);
        $entityManager->flush();

        return $this->redirectToRoute('ListeAsso'); /*Et on redirige vers la route d'affichage de la liste des associations*/
    }

    /**
     * Permet pour le gérant de la structure d'ajouter une association
     * @Route("/AjoutAsso", name="AjoutAsso")
     * */
    public function AjoutAsso(Request $request,EntityManagerInterface $em){

        //Récupération la structure
        $structure = $this->getUser() ->getPersonne()-> getStructures(); /*Va chercher la structure lié à la personne connectée*/

            //Création d'un objet personne pour pouvoir enregistrer ses données
            $association = new Association();

            //On lie l'association à la structure
             $association->setStructure($structure[0]);

            //Création du form pour enregistrer une Association
            $form = $this->createFormBuilder($association)
                ->add('nom_asso', TextType::class, ['label' => "Nom",])
                ->add('mail_asso', TextType::class, ['label' => "Adresse Mail",])
                ->add('tel_asso', TextType::class, ['label' => "Téléphone",])
                ->add('adresse_asso', TextType::class, ['label' => "Adresse",])
                ->add('federation_asso', TextType::class, ['label' => "Fédération",])
                ->add('comite_asso', TextType::class, ['label' => "Comité",])
                ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
                ->getForm();
            $form->handleRequest($request);

            // Seulement si le form est valide
            if ($form->isSubmitted() && $form->isValid()) {


                // On persist et on flush avec la base de donnée
                $em->persist($association);
                $em->flush();

                return $this->redirectToRoute('ListeAsso'); /*Et on redirige vers la route d'affichage de la liste des associations*/
            }

            //Si le form n'est pas valide on supprime l'association
            dump($association);
            //Et on reste sur la page du formulaire
            return $this->render('accueil/structure/acceuilformulaireStructure.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du form*/
    }

    /* Gestion Adhérent par Asso
    *******************************************************************************************************************/

    /**
     * Permet d'afficher la liste des Associations ainsi que des adhérents faisant parti de ses associations pour la structure dont la personne connecté est responsable
     * @Route("/GestionAdhStruct", name="GestionAdhStruct")
     * */
    public function GestionAdhStruct(){

        $Structure= $this -> getUser()->getPersonne()-> getStructures(); /*Récupère les informations de la structure liées à l'admin structure*/
        $ListeAsso = $Structure[0] -> getAssociations(); /*Récupère la liste des asociations liées à la structure récupèré à la ligne d'au-dessus*/

        return $this->render('accueil/structure/listeAdhStruct.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet d'afficher la liste des personnes existantes (ajout d'un adhérent ou d'un intervenant)
     * @Route("/ListePersonneStruct/{idAsso}", name="ListePersonneStruct")
     * */
    public function ListePersonneStruct($idAsso){

        $repo_pers = $this->getDoctrine()->getRepository(Personne::class)-> FindAll(); /*Trouve la liste de toutes les personnes déjà existantes*/

        return $this->render('accueil/structure/listePersonneStructure.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'personnes' => $repo_pers, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'idAsso' => $idAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour le gérant de la structure d'ajouter une personne
     * @Route("/AjoutPersonneStruct/{idAsso}", name="AjoutPersonneStruct")
     * */
    public function AjoutPersonneStruct(Request $request,EntityManagerInterface $em, $idAsso){

        //Création d'un objet personne pour pouvoir enregistrer ses données
        $personne=new Personne;

        //Création du form pour enregistrer une nouvelle personne
        $form = $this->createFormBuilder($personne)
            ->add('nom_pers',TextType::class,['label'  => "Nom",])
            ->add('prenom_pers',TextType::class,['label'  => "Prénom",])
            ->add('mail_pers',TextType::class,['label'  => "Adresse e-mail",])
            ->add('mdp',TextType::class,['label'  => "Mot de passe",])
            ->add('save',SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ /*Si le formulaire est remplit et que l'utilisateur clic sur Enregistrer*/
            $em->persist($personne);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('ListePersonneStruct', [ /*Et on redirige vers la route d'affichage de la liste des personnes*/
                'idAsso' => $idAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée par la route d'au-dessus*/
            ]);
        }

        dump($personne); /*Si le form n'est pas valide on supprime la personne*/
        return $this->render('accueil/structure/acceuilformulaireStructure.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du form*/

    }

    /**
     * Permet pour le gérant de la structure d'ajouter un adhérent à une asso
     * @Route("/AjoutAdhStruct/{id}/{idAsso}", name="AjoutAdhStruct")
     * */
    public function AjoutAdhStruct(Request $request,EntityManagerInterface $em, $id, $idAsso){

        //Récupération des entité "personne" et "association" avec leur id
        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id);
        $asso = $this->getDoctrine()->getRepository(Association::class)->find($idAsso);

        //On vérifie que l'adhérent pour cette personne n'existe pas déjà
        $ifadherentexist = $personne->getAdherent();

        //Si l'adhérent n'existe pas déjà
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
                return $this->redirectToRoute('GestionAdhStruct');
            }

            //Si le form n'est pas valide on supprime l'adhérent
            dump($adherent);
            //Et on retoure à la page 'listeAdh'
            return $this->render('accueil/structure/acceuilformulaireStructure.html.twig', ['form' => $form->createView()]); /*Si les conditions ne sont pas validées alors on reste sur la page de modification du form*/

        }

        //Si l'adhérent existe
        elseif($ifadherentexist!=null){
            $id=$ifadherentexist->getId(); //On récupère l'id de l'adhérent
            $adherentexist = $this->getDoctrine()->getRepository(Adherent::class)->find($id); //On récupère toutes les informations de l'adhérent
            $adherentexist->addAsso($asso); //On lie l'adhérent à l'association
            $em->persist($adherentexist);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('GestionAdhStruct'); /*Et on redirige vers la route d'affichage de la gestion des adhérents*/
        }

        else{
            return $this->redirectToRoute('homestructure'); /*On redirige vers la route d'affichage de la page d'accueil*/
        }
    }

    /**
     * Supprimer un adhérent d'une asso pour un admin structure
     * @Route("/supprAdhStruct/{idAdh}/{idAsso}", name="supprAdhStruct")
     * */

    public function supprAdhStruct(Request $request,EntityManagerInterface $em, $idAdh, $idAsso){

        $entityManager = $this->getDoctrine()->getManager();

        //On recupère les entitiés adhérent et association lié à l'id de l'adhérent et de l'asso sélectionnés
        $adherent = $entityManager-> getRepository(Adherent::class)->find($idAdh);
        $asso= $entityManager-> getRepository(Association::class)->find($idAsso);

        //////SUPRESSION DU LIEN AVEC LES GROUPES CONCERNES//////
        //On récupère la liste des groupes liés l'adhérent séléctionné
        $listeGroupe=$adherent->getGroupes();

        //On regarde les groupes qui sont liés à l'association séléctionné
        for($i=0;$i <= count($listeGroupe);++$i){
            //On vérifie si le Groupe existe
            if($listeGroupe[$i]!=null){
                //On vérifie si il est lié a l'asso que l'on veut
                $AssoduGroupe = $listeGroupe[$i]->getAssociation();
                if($AssoduGroupe == $asso){
                    //On supprime le lien entre l'adhérent et le groupe
                    $adherent->removeGroupe($listeGroupe[$i]);
                    $entityManager->flush(); /*Alors les informations sont mise à jour dans la BDD*/
                }
            }
        }

        //////SUPRESSION DU LIEN AVEC LES ASSOCIATIONS CONCERNEES//////
        $adherent->removeAsso($asso);
        $entityManager->flush(); /*Mise à jour dans la BDD*/

        //On renvoi à la page de gestion des adhérents
        return $this->redirectToRoute('GestionAdhStruct');
    }

    /* Gestion Interevenant par Asso
    *******************************************************************************************************************/

    /**
     * Permet d'afficher la liste des intervenants de l'association dont la personne connecté est responsable
     * @Route("/GestionInterStruct", name="GestionInterStruct")
     * */
    public function GestionInterStruct(){

        $Structure= $this -> getUser()->getPersonne()-> getStructures(); /*Récupère toutes les informations de la structure liée à la personne qui est connectée*/
        $ListeAsso = $Structure[0] -> getAssociations(); /*Récupère toutes les associations liées à la structure récupèré au-dessus*/

        return $this->render('accueil/structure/listeIntervenantStructure.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet pour le gérant de la structure d'ajouter un intervenant a une asso
     * @Route("/AjoutInterStruct/{id}/{idAsso}", name="AjoutInterStruct")
     * */
    public function AjoutInterStruct(Request $request,EntityManagerInterface $em, $id, $idAsso){

        //Récupération des entité "personne" et "association" avec leur id
        $personne = $this->getDoctrine()->getRepository(Personne::class)->find($id);
        $asso = $this->getDoctrine()->getRepository(Association::class)->find($idAsso);

        //On vérifie que l'intervenant pour cette personne n'existe pas déjà
        $ifintervenantexist = $personne->getIntervenant();

        //Si l'adhérent n'existe pas déjà
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
                return $this->redirectToRoute('GestionInterStruct');
            }

            //Si le form n'est pas valide on supprime l'intervenant
            dump($intervenant);
            //Et on reste sur la page du formulaire
            return $this->render('accueil/structure/acceuilformulaireStructure.html.twig', ['form' => $form->createView()]);

        }

        //Si l'adhérent existe déjà
        elseif($ifintervenantexist!=null){
            $ifintervenantexist->addAssociation($asso); //On lie l'association à l'adhérent
            $em->persist($ifintervenantexist);
            $em->flush(); /*Alors les informations sont mise à jour dans la BDD*/
            return $this->redirectToRoute('GestionInterStruct'); /*Envoie les informations vers la route de gestion des intervenants*/
        }

        else{
            return $this->redirectToRoute('homestructure'); /*On redirige vers la route d'affichage de la page d'accueil*/
        }
    }

    /**
     * Supprimer un adhérent d'une asso pour un admin structure
     * @Route("/supprInterStruct/{idInter}/{idAsso}", name="supprInterStruct")
     * */

    public function supprInterStruct(Request $request,EntityManagerInterface $em, $idInter, $idAsso){

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
        return $this->redirectToRoute('GestionInterStruct');
    }

    /* Gestion Groupe par Asso
    *******************************************************************************************************************/


    /**
     * Permet d'afficher la liste des groupes de l'association dont la personne connecté est responsable
     * @Route("/GestionGroupeStruct", name="GestionGroupeStruct")
     * */
    public function GestionGroupeStruct(){

        $Structure= $this -> getUser()->getPersonne()-> getStructures(); /*Récupère toutes les informations de la structure liée à la personne qui est connectée*/
        $ListeAsso = $Structure[0] -> getAssociations(); /*Récupère toutes les associations liées à la structure récupèré au-dessus*/

        return $this->render('accueil/structure/listeGroupesStructure.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'associations' => $ListeAsso, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet d'afficher la liste des Intervenants existants (ajout d'un intervenant dans un groupe)
     * @Route("/ListeIntervenantGroupeStruct/{idGroupe}", name="ListeIntervenantGroupeStruct")
     * */
    public function ListeIntervenantGroupeStruct($idGroupe){

        $Groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe); /*Récupère toutes les informations du groupe liée à l'id envoyé par le bouton*/
        $ListeInter = $Groupe -> getAssociation() -> getIntervenant(); /*Récupère tout les intervenants liés au groupe récupèré au-dessus*/

        return $this->render('accueil/structure/listeIntervenantAjoutGroupeStruct.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'intervenants' => $ListeInter, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'idGroupe' => $idGroupe, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }

    /**
     * Permet d'afficher la liste des Adhérents existants (ajout d'un adhérent dans un groupe)
     * @Route("/ListeAdhGroupeStruct/{idGroupe}", name="ListeAdhGroupeStruct")
     * */
    public function ListeAdhGroupeStruct($idGroupe){

        $Groupe = $this->getDoctrine()->getRepository(Groupe::class)->find($idGroupe); /*Récupère toutes les informations du groupe liée à l'id envoyé par le bouton*/
        $ListeAdh = $Groupe -> getAssociation() -> getAdherents(); /*Récupère tout les adhérents liés au groupe récupèré au-dessus*/

        return $this->render('accueil/structure/listeAdhAjoutGroupeStruct.html.twig', [ /*Envoie les informations vers le templates d'affichage*/
            'adherents' => $ListeAdh, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
            'idGroupe' => $idGroupe, /*Envoie les informations récupérées par la fonction associée par la variable utilisée dans le template*/
        ]);
    }


}


?>