<?php

namespace Acme\DevisBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Acme\DevisBundle\Entity\Tablier;

use Acme\DevisBundle\Entity\Axe;

use Acme\DevisBundle\Entity\Rideau;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;
    
     /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=50)
     */
    private $codepostal;
    
    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50,nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255,nullable=true)
     */
    private $observation;


    /*
     * @var array
     * 
     * @ORM\OneToMany(targetEntity="Tablier",mappedBy="client")
     * 
     */
    private $tabliers;
    
    /*
     * @var array
     * 
     * @ORM\OneToMany(targetEntity="Axe",mappedBy="client")
     * 
     */
    private $axes;
    
     /*
     * 
     * @ORM\OneToMany(targetEntity="Rideau",mappedBy="client")
     * 
     */
    private $rideau;
    
    
    public function __construct() {
        
        $this->tabliers = new ArrayCollection();
        
        $this->axes = new ArrayCollection();
        
        $this->rideau = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Client
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    
        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }
    
    /**
     * Get tabliers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTabliers()
    {
        return $this->tabliers;
    }
    
    /**
     * Add tablier
     *
     * @param \Acme\DevisBundle\Entity\Tablier $tablier
     * @return User
     */
    public function addTabliers(Tablier $tablier)
    {
        $this->tabliers[] = $tablier;
    
        return $this;
    }

    /**
     * Remove tablier
     *
     * @param \Acme\DevisBundle\Entity\Tablier $tablier
     */
    public function removeTabliers(Tablier $tablier)
    {
        $this->tabliers->removeElement($tablier);
    }

    /**
     * Get axes
     *
     * @return \Doctrine\Common\Collections\Collection  
     */
    public function getAxes()
    {
        return $this->axes;
    }
    
    /**
     * Add axe
     *
     * @param \Acme\DevisBundle\Entity\Axe $axe
     * @return User
     */
    public function addAxes(Axe $axe)
    {
        $this->axes[] = $axe;
    
        return $this;
    }

    /**
     * Remove axe
     *
     * @param \Acme\DevisBundle\Entity\Axe $axe
     */
    public function removeAxe(Axe $axe)
    {
        $this->axes->removeElement($axe);
    }
    
    /**
     * Get rideau
     *
     * @return \Doctrine\Common\Collections\Collection  
     */
    public function getRideau()
    {
        return $this->rideau;
    }
    
    /**
     * Add axe
     *
     * @param \Acme\DevisBundle\Entity\Axe $axe
     * @return User
     */
    public function addRideau(Rideau $rideau)
    {
        $this->rideau[] = $rideau;
    
        return $this;
    }

    /**
     * Remove rideau
     *
     * @param \Acme\DevisBundle\Entity\Rideau $rideau
     */
    public function removeRideau(Rideau $rideau)
    {
        $this->axes->removeElement($rideau);
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }



    /**
     * Set reference
     *
     * @param string $reference
     * @return Client
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Client
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    
        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }
    
    /**
     * Permet d'avoir la description de notre objet.
     * @return string
     */
    public function __toString()
    {
             $client = "";
             $client .="\nINFORMATIONS DU CLIENT :\n";
             $client .="Nom = ".$this->nom."\n";
             $client .="Prenom = ".$this->prenom."\n";
             $client .="Adresse= ".$this->adresse."\n";
             $client .="Ville = ".  $this->ville."\n";
             $client .="Code Postal = ".$this->codepostal."\n";
             $client .="Reference= ".$this->reference."\n";
             $client .="Telephone = ".$this->telephone."\n";
             $client .="Observation = ".$this->observation."\n"; 
             return $client;
    }
    
    
}