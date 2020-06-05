<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Association extends \App\Entity\Association implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'nom_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'mail_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'tel_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'federation_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'comite_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'adherents', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'intervenant', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'personnes', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'adresse_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'structure', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'groupes', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'adminsAsso'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'nom_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'mail_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'tel_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'federation_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'comite_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'adherents', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'intervenant', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'personnes', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'adresse_asso', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'structure', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'groupes', '' . "\0" . 'App\\Entity\\Association' . "\0" . 'adminsAsso'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Association $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomAsso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomAsso', []);

        return parent::getNomAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomAsso(string $nom_asso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomAsso', [$nom_asso]);

        return parent::setNomAsso($nom_asso);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailAsso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailAsso', []);

        return parent::getMailAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailAsso(string $mail_asso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailAsso', [$mail_asso]);

        return parent::setMailAsso($mail_asso);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelAsso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelAsso', []);

        return parent::getTelAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelAsso(string $tel_asso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelAsso', [$tel_asso]);

        return parent::setTelAsso($tel_asso);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseAsso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseAsso', []);

        return parent::getAdresseAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseAsso(string $adresse_asso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseAsso', [$adresse_asso]);

        return parent::setAdresseAsso($adresse_asso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFederationAsso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFederationAsso', []);

        return parent::getFederationAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function setFederationAsso(string $federation_asso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFederationAsso', [$federation_asso]);

        return parent::setFederationAsso($federation_asso);
    }

    /**
     * {@inheritDoc}
     */
    public function getComiteAsso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComiteAsso', []);

        return parent::getComiteAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function setComiteAsso(?string $comite_asso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComiteAsso', [$comite_asso]);

        return parent::setComiteAsso($comite_asso);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdherents(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdherents', []);

        return parent::getAdherents();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdherent(\App\Entity\Adherent $adherent): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdherent', [$adherent]);

        return parent::addAdherent($adherent);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdherent(\App\Entity\Adherent $adherent): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdherent', [$adherent]);

        return parent::removeAdherent($adherent);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntervenant(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntervenant', []);

        return parent::getIntervenant();
    }

    /**
     * {@inheritDoc}
     */
    public function addIntervenant(\App\Entity\Intervenant $intervenant): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIntervenant', [$intervenant]);

        return parent::addIntervenant($intervenant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIntervenant(\App\Entity\Intervenant $intervenant): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIntervenant', [$intervenant]);

        return parent::removeIntervenant($intervenant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonnes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonnes', []);

        return parent::getPersonnes();
    }

    /**
     * {@inheritDoc}
     */
    public function addPersonne(\App\Entity\Personne $personne): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPersonne', [$personne]);

        return parent::addPersonne($personne);
    }

    /**
     * {@inheritDoc}
     */
    public function removePersonne(\App\Entity\Personne $personne): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePersonne', [$personne]);

        return parent::removePersonne($personne);
    }

    /**
     * {@inheritDoc}
     */
    public function getStructure(): ?\App\Entity\Structure
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStructure', []);

        return parent::getStructure();
    }

    /**
     * {@inheritDoc}
     */
    public function setStructure(?\App\Entity\Structure $id_structure): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStructure', [$id_structure]);

        return parent::setStructure($id_structure);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupes', []);

        return parent::getGroupes();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroupe(\App\Entity\Groupe $groupe): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroupe', [$groupe]);

        return parent::addGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroupe(\App\Entity\Groupe $groupe): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroupe', [$groupe]);

        return parent::removeGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminsAsso(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminsAsso', []);

        return parent::getAdminsAsso();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdminsAsso(\App\Entity\AdminAsso $adminsAsso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdminsAsso', [$adminsAsso]);

        return parent::addAdminsAsso($adminsAsso);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdminsAsso(\App\Entity\AdminAsso $adminsAsso): \App\Entity\Association
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdminsAsso', [$adminsAsso]);

        return parent::removeAdminsAsso($adminsAsso);
    }

}
