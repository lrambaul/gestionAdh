<?php

namespace App\Controller;

use App\Entity\Adherent;
use App\Entity\AdminAsso;
use App\Entity\AdminStructure;
use App\Entity\Intervenant;
use App\Entity\SuperAdmin;
use App\Security\AdherentAuthenticator;
use App\Security\SuperAdminTokenAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Personne;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class SecurityController extends AbstractController
{

    /**
     * Permet d'afficher le formulaire de login et de renvoyé vers la page de choix du rôle
     * @Route("/", name="log")
     * @Route("/public/connexion", name="security_login")
     */
    public function getForm(AuthenticationUtils $authenticationUtils ,Request $request, UserPasswordEncoderInterface $encoder )
    {
        // retrouver une erreur d'authentification s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        $msg="";
        // retrouver le dernier identifiant de connexion utilisé
        $lastUsername = $authenticationUtils->getLastUsername();
        //récupère le mail et le mot de passe entrés dans le formulaire
        $mail = $request->request->get('_username');
        $mdp = $request->request->get('_password');
        //recherche de la personne correspondant à ce mail
        $personne = $this->getDoctrine()->getRepository(Personne::class)
            ->findOneBy(['mail_pers' => $mail]);

        $data = [];
        //si on a trouvé quelqu'un
        if ($personne) {
            //on vérifie que le mot de passe est correcte
            $mdpBon=$encoder->isPasswordValid($personne, $mdp);
            //si il est bon
            if ($mdpBon){
                //on récupère un tableau des connexions possibles de cette personne
                $data=$this->getConnexion($personne,$mdp);
                //on renvoie le formulaire de choix de rôles
                return $this->render('accueil/choixRoles.html.twig', [
                        'data' => $data,
                        'taille'=>count($data)
                    ]
                );
            }else{
                //si le mot de passe est un incorrect on remplis le message
                $msg="mot de passe incorrect";
            }

        }
        //on retourne la page de formulaire
        return $this->render('security/loginForm.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'message'=> $msg]);

    }

    /*
     * Fonction qui renvoie un tableau comportant un tableau par type de connexion possible d'une personne
     * Chaque tableau comporte, l'identifiant de l'utilisateur, son mot de passe, la route de connexion de ce type
     * d'utilisateur (nécessaires au formulaire de choix)
     *  et la dénomination du type d'utilisateur (afficher dans le bouton de choix)
     */
    public function getConnexion(Personne $personne, String $mdp){
        $data=[];
        $superAdmin = $this->getDoctrine()->getRepository(SuperAdmin::class)
            ->findOneBy(['personne' => $personne]);
        if ($superAdmin != null) {
            $info = [];
            array_push($info, $superAdmin->getId(), $mdp, "/superAdmin",
                "SuperAdministrateur");
            array_push($data, $info);
        }
        $adminStructure = $this->getDoctrine()->getRepository(AdminStructure::class)
            ->findOneBy(['personne' => $personne]);
        if ($adminStructure != null) {
            $info = [];
            array_push($info, $adminStructure->getId(), $mdp, "/adminStrcuture",
                "AdministrateurStructure");
            array_push($data, $info);
        }
        $adminAsso = $this->getDoctrine()->getRepository(AdminAsso::class)
            ->findOneBy(['personne' => $personne]);
        if ($adminAsso != null) {
            $info = [];
            array_push($info, $adminAsso->getId(), $mdp, "/adminAsso",
                "AdministrateurAssociation");
            array_push($data, $info);
        }
        $intervenant = $this->getDoctrine()->getRepository(Intervenant::class)
            ->findOneBy(['personne' => $personne]);
        if ($intervenant != null) {
            $info = [];
            array_push($info, $intervenant->getId(), $mdp, "/intervenant", "Intervenant");
            array_push($data, $info);

        }
        $adherent = $this->getDoctrine()->getRepository(Adherent::class)
            ->findOneBy(['personne' => $personne]);
        if ($adherent != null) {
            $info = [];
            array_push($info, $adherent->getId(), $mdp, "/adherent",
                "Adherent");
            array_push($data, $info);
        }
        return $data;
    }

    /**
     * Fonction qui permet de changer de profil
     * @Route("/changeConnexion", name="changeConnexion")
     */
    public function changeConnexion(Request $request, TokenStorageInterface $token)
    {
        //on récupère les info de la personne connecté
        $personne=$this->getUser()->getPersonne();
        $mdp=$this->getUser()->getPassword();
        //on récupère ses possibilités de connexion
        $data=$this->getConnexion($personne, $mdp);

        //on déconnecte la personne
        $anon = new AnonymousToken("", 'anon.', []);
        $token->setToken($anon);
        //on affiche le formulaire de choix du role
        return $this->render('accueil/choixRoles.html.twig', [
                'data' => $data,
                'taille'=>count($data)
            ]
        );
    }


    /**
     * Fonction qui permet la connexion d'un superAdmin
     * @Route ("/superAdmin", name="ConnexionSuperAdminLogin")
     */
    public function connexionSuperAdminLogin(){
    }
    /**
     * Fonction qui permet la connexion d'un intervenant
     * @Route ("/intervenant", name="ConnexionIntervenantLogin")
     */
    public function connexionIntervenantLogin(){
    }
    /**
     * Fonction qui permet la connexion d'un administrateur structure
     * @Route ("/adminStrcuture", name="ConnexionAdminStructureLogin")
     */
    public function connexionAdminStructureLogin(){
    }

    /**
     * Fonction qui permet la connexion d'un adhérent
     * @Route ("/adherent", name="ConnexionAdherentLogin")
     */
    public function connexionAdherentLogin(){
    }

    /**
     * Fonction qui permet la connexion d'un administrateur d'association
     * @Route ("/adminAsso", name="ConnexionAdminAssoLogin")
     */
    public function connexionAdminAssoLogin(){
        session_destroy();
    }



    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(): void
    {
    }



}