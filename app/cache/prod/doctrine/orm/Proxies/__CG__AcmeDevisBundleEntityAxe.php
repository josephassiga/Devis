<?php

namespace Proxies\__CG__\Acme\DevisBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Axe extends \Acme\DevisBundle\Entity\Axe implements \Doctrine\ORM\Proxy\Proxy
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

    public function setQuantite($quantite)
    {
        $this->__load();
        return parent::setQuantite($quantite);
    }

    public function getQuantite()
    {
        $this->__load();
        return parent::getQuantite();
    }

    public function setLargeur($largeur)
    {
        $this->__load();
        return parent::setLargeur($largeur);
    }

    public function getLargeur()
    {
        $this->__load();
        return parent::getLargeur();
    }

    public function setCoulisse($coulisse)
    {
        $this->__load();
        return parent::setCoulisse($coulisse);
    }

    public function getCoulisse()
    {
        $this->__load();
        return parent::getCoulisse();
    }

    public function setHauteur($hauteur)
    {
        $this->__load();
        return parent::setHauteur($hauteur);
    }

    public function getHauteur()
    {
        $this->__load();
        return parent::getHauteur();
    }

    public function setHauteurEnroulement($hauteurEnroulement)
    {
        $this->__load();
        return parent::setHauteurEnroulement($hauteurEnroulement);
    }

    public function getHauteurEnroulement()
    {
        $this->__load();
        return parent::getHauteurEnroulement();
    }

    public function setManoeuvre($manoeuvre)
    {
        $this->__load();
        return parent::setManoeuvre($manoeuvre);
    }

    public function getManoeuvre()
    {
        $this->__load();
        return parent::getManoeuvre();
    }

    public function setEnroulement($enroulement)
    {
        $this->__load();
        return parent::setEnroulement($enroulement);
    }

    public function getEnroulement()
    {
        $this->__load();
        return parent::getEnroulement();
    }

    public function setSortieFils($sortieFils)
    {
        $this->__load();
        return parent::setSortieFils($sortieFils);
    }

    public function getSortieFils()
    {
        $this->__load();
        return parent::getSortieFils();
    }

    public function setTablier($tablier)
    {
        $this->__load();
        return parent::setTablier($tablier);
    }

    public function getTablier()
    {
        $this->__load();
        return parent::getTablier();
    }

    public function setAxe($axe)
    {
        $this->__load();
        return parent::setAxe($axe);
    }

    public function getAxe()
    {
        $this->__load();
        return parent::getAxe();
    }

    public function setJoues($joues)
    {
        $this->__load();
        return parent::setJoues($joues);
    }

    public function getJoues()
    {
        $this->__load();
        return parent::getJoues();
    }

    public function setNumeroRal($numeroRal)
    {
        $this->__load();
        return parent::setNumeroRal($numeroRal);
    }

    public function getNumeroRal()
    {
        $this->__load();
        return parent::getNumeroRal();
    }

    public function setBoite($boite)
    {
        $this->__load();
        return parent::setBoite($boite);
    }

    public function getBoite()
    {
        $this->__load();
        return parent::getBoite();
    }

    public function setBoutton($boutton)
    {
        $this->__load();
        return parent::setBoutton($boutton);
    }

    public function getBoutton()
    {
        $this->__load();
        return parent::getBoutton();
    }

    public function setClient(\Acme\DevisBundle\Entity\Client $client = NULL)
    {
        $this->__load();
        return parent::setClient($client);
    }

    public function getClient()
    {
        $this->__load();
        return parent::getClient();
    }

    public function setSerrureSurLame($serrureSurLame)
    {
        $this->__load();
        return parent::setSerrureSurLame($serrureSurLame);
    }

    public function getSerrureSurLame()
    {
        $this->__load();
        return parent::getSerrureSurLame();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'quantite', 'largeur', 'coulisse', 'hauteur', 'hauteur_enroulement', 'manoeuvre', 'enroulement', 'sortie_fils', 'tablier', 'serrure_sur_lame', 'axe', 'joues', 'numero_ral', 'boite', 'boutton', 'client');
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