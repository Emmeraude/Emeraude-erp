<?php

namespace Proxies\__CG__\EPlan\PlanningBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ec extends \EPlan\PlanningBundle\Entity\Ec implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'id', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'libelle', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'code', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'volHeuresTD', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'volHeuresCM', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'volHeuresTP', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'niveau', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'ecUes', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'departement', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'enseignantsEc');
        }

        return array('__isInitialized__', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'id', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'libelle', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'code', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'volHeuresTD', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'volHeuresCM', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'volHeuresTP', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'niveau', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'ecUes', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'departement', '' . "\0" . 'EPlan\\PlanningBundle\\Entity\\Ec' . "\0" . 'enseignantsEc');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ec $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolHeuresTD($volHeuresTD)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolHeuresTD', array($volHeuresTD));

        return parent::setVolHeuresTD($volHeuresTD);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolHeuresTD()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolHeuresTD', array());

        return parent::getVolHeuresTD();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolHeuresCM($volHeuresCM)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolHeuresCM', array($volHeuresCM));

        return parent::setVolHeuresCM($volHeuresCM);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolHeuresCM()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolHeuresCM', array());

        return parent::getVolHeuresCM();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolHeuresTP($volHeuresTP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolHeuresTP', array($volHeuresTP));

        return parent::setVolHeuresTP($volHeuresTP);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolHeuresTP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolHeuresTP', array());

        return parent::getVolHeuresTP();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumSemestre($numSemestre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumSemestre', array($numSemestre));

        return parent::setNumSemestre($numSemestre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumSemestre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumSemestre', array());

        return parent::getNumSemestre();
    }

    /**
     * {@inheritDoc}
     */
    public function addEcUe(\EPlan\PlanningBundle\Entity\EcUe $ecUe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEcUe', array($ecUe));

        return parent::addEcUe($ecUe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEcUe(\EPlan\PlanningBundle\Entity\EcUe $ecUe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEcUe', array($ecUe));

        return parent::removeEcUe($ecUe);
    }

    /**
     * {@inheritDoc}
     */
    public function getEcUes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEcUes', array());

        return parent::getEcUes();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau($niveau)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', array($niveau));

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', array());

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement(\EPlan\PlanningBundle\Entity\Departement $departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', array($departement));

        return parent::setDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', array());

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnseignantEc(\EPlan\PlanningBundle\Entity\EnseignantEc $ensEc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnseignantEc', array($ensEc));

        return parent::addEnseignantEc($ensEc);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnseignantEc(\EPlan\PlanningBundle\Entity\EnseignantEc $ensEc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnseignantEc', array($ensEc));

        return parent::removeEnseignantEc($ensEc);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignantEc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignantEc', array());

        return parent::getEnseignantEc();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnseignantsEc(\EPlan\PlanningBundle\Entity\EnseignantEc $enseignantsEc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnseignantsEc', array($enseignantsEc));

        return parent::addEnseignantsEc($enseignantsEc);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnseignantsEc(\EPlan\PlanningBundle\Entity\EnseignantEc $enseignantsEc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnseignantsEc', array($enseignantsEc));

        return parent::removeEnseignantsEc($enseignantsEc);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignantsEc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignantsEc', array());

        return parent::getEnseignantsEc();
    }

}
