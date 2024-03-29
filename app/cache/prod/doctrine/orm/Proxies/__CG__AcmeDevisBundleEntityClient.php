<?php

namespace Proxies\__CG__\Acme\DevisBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Client extends \Acme\DevisBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setObservation($observation)
    {
        $this->__load();
        return parent::setObservation($observation);
    }

    public function getObservation()
    {
        $this->__load();
        return parent::getObservation();
    }

    public function getTabliers()
    {
        $this->__load();
        return parent::getTabliers();
    }

    public function addTabliers(\Acme\DevisBundle\Entity\Tablier $tablier)
    {
        $this->__load();
        return parent::addTabliers($tablier);
    }

    public function removeTabliers(\Acme\DevisBundle\Entity\Tablier $tablier)
    {
        $this->__load();
        return parent::removeTabliers($tablier);
    }

    public function getAxes()
    {
        $this->__load();
        return parent::getAxes();
    }

    public function addAxes(\Acme\DevisBundle\Entity\Axe $axe)
    {
        $this->__load();
        return parent::addAxes($axe);
    }

    public function removeAxe(\Acme\DevisBundle\Entity\Axe $axe)
    {
        $this->__load();
        return parent::removeAxe($axe);
    }

    public function getRideau()
    {
        $this->__load();
        return parent::getRideau();
    }

    public function addRideau(\Acme\DevisBundle\Entity\Rideau $rideau)
    {
        $this->__load();
        return parent::addRideau($rideau);
    }

    public function removeRideau(\Acme\DevisBundle\Entity\Rideau $rideau)
    {
        $this->__load();
        return parent::removeRideau($rideau);
    }

    public function setTelephone($telephone)
    {
        $this->__load();
        return parent::setTelephone($telephone);
    }

    public function getTelephone()
    {
        $this->__load();
        return parent::getTelephone();
    }

    public function setReference($reference)
    {
        $this->__load();
        return parent::setReference($reference);
    }

    public function getReference()
    {
        $this->__load();
        return parent::getReference();
    }

    public function setCodepostal($codepostal)
    {
        $this->__load();
        return parent::setCodepostal($codepostal);
    }

    public function getCodepostal()
    {
        $this->__load();
        return parent::getCodepostal();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom', 'prenom', 'adresse', 'telephone', 'ville', 'codepostal', 'reference', 'observation');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}