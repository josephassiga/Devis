<?php

namespace Acme\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Axe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Axe
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="largeur", type="integer")
     */
    private $largeur;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="coulisse", type="boolean")
     */
    private $coulisse;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteur", type="integer")
     */
    private $hauteur;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="hauteur_enroulement", type="boolean")
     */
    private $hauteur_enroulement;

    /**
     * @var integer
     *
     * @ORM\Column(name="manoeuvre", type="integer")
     */
    private $manoeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="enroulement", type="integer")
     */
    private $enroulement;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortie_fils", type="integer")
     */
    private $sortie_fils;

    /**
     * @var string
     *
     * @ORM\Column(name="tablier", type="string", length=255)
     */
    private $tablier;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="serrure_sur_lame", type="boolean")
     */
    private $serrure_sur_lame;

    /**
     * @var integer
     *
     * @ORM\Column(name="axe", type="integer")
     */
    private $axe;

    /**
     * @var integer
     *
     * @ORM\Column(name="joues", type="integer")
     */
    private $joues;

    
     /**
     * @var string
     *
     * @ORM\Column(name="numero_ral", type="string",length=255)
     */
    private $numero_ral;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="boite", type="boolean")
     */
    private $boite;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="boutton", type="boolean")
     */
    private $boutton;


    /**
     * 
     * @ORM\ManyToOne(targetEntity="Client",inversedBy="axes",cascade={"persist"})
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    
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
     * Set quantite
     *
     * @param integer $quantite
     * @return Axe
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set largeur
     *
     * @param integer $largeur
     * @return Axe
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    
        return $this;
    }

    /**
     * Get largeur
     *
     * @return integer 
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set coulisse
     *
     * @param boolean $coulisse
     * @return Axe
     */
    public function setCoulisse($coulisse)
    {
        $this->coulisse = $coulisse;
    
        return $this;
    }

    /**
     * Get coulisse
     *
     * @return boolean 
     */
    public function getCoulisse()
    {
        return $this->coulisse;
    }

    /**
     * Set hauteur
     *
     * @param integer $hauteur
     * @return Axe
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    
        return $this;
    }

    /**
     * Get hauteur
     *
     * @return integer 
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur_enroulement
     *
     * @param boolean $hauteurEnroulement
     * @return Axe
     */
    public function setHauteurEnroulement($hauteurEnroulement)
    {
        $this->hauteur_enroulement = $hauteurEnroulement;
    
        return $this;
    }

    /**
     * Get hauteur_enroulement
     *
     * @return boolean 
     */
    public function getHauteurEnroulement()
    {
        return $this->hauteur_enroulement;
    }

    /**
     * Set manoeuvre
     *
     * @param integer $manoeuvre
     * @return Axe
     */
    public function setManoeuvre($manoeuvre)
    {
        $this->manoeuvre = $manoeuvre;
    
        return $this;
    }

    /**
     * Get manoeuvre
     *
     * @return integer 
     */
    public function getManoeuvre()
    {
        return $this->manoeuvre;
    }

    /**
     * Set enroulement
     *
     * @param integer $enroulement
     * @return Axe
     */
    public function setEnroulement($enroulement)
    {
        $this->enroulement = $enroulement;
    
        return $this;
    }

    /**
     * Get enroulement
     *
     * @return integer 
     */
    public function getEnroulement()
    {
        return $this->enroulement;
    }

    /**
     * Set sortie_fils
     *
     * @param integer $sortieFils
     * @return Axe
     */
    public function setSortieFils($sortieFils)
    {
        $this->sortie_fils = $sortieFils;
    
        return $this;
    }

    /**
     * Get sortie_fils
     *
     * @return integer 
     */
    public function getSortieFils()
    {
        return $this->sortie_fils;
    }

    /**
     * Set tablier
     *
     * @param string $tablier
     * @return Axe
     */
    public function setTablier($tablier)
    {
        $this->tablier = $tablier;
    
        return $this;
    }

    /**
     * Get tablier
     *
     * @return string 
     */
    public function getTablier()
    {
        return $this->tablier;
    }

    /**
     * Set axe
     *
     * @param integer $axe
     * @return Axe
     */
    public function setAxe($axe)
    {
        $this->axe = $axe;
    
        return $this;
    }

    /**
     * Get axe
     *
     * @return integer 
     */
    public function getAxe()
    {
        return $this->axe;
    }

    /**
     * Set joues
     *
     * @param integer $joues
     * @return Axe
     */
    public function setJoues($joues)
    {
        $this->joues = $joues;
    
        return $this;
    }

    /**
     * Get joues
     *
     * @return integer 
     */
    public function getJoues()
    {
        return $this->joues;
    }


    /**
     * Set numero_ral
     *
     * @param string $numeroRal
     * @return Axe
     */
    public function setNumeroRal($numeroRal)
    {
        $this->numero_ral = $numeroRal;
    
        return $this;
    }

    /**
     * Get numero_ral
     *
     * @return string 
     */
    public function getNumeroRal()
    {
        return $this->numero_ral;
    }

    /**
     * Set boite
     *
     * @param boolean $boite
     * @return Axe
     */
    public function setBoite($boite)
    {
        $this->boite = $boite;
    
        return $this;
    }

    /**
     * Get boite
     *
     * @return boolean 
     */
    public function getBoite()
    {
        return $this->boite;
    }

    /**
     * Set boutton
     *
     * @param boolean $boutton
     * @return Axe
     */
    public function setBoutton($boutton)
    {
        $this->boutton = $boutton;
    
        return $this;
    }

    /**
     * Get boutton
     *
     * @return boolean 
     */
    public function getBoutton()
    {
        return $this->boutton;
    }

    /**
     * Set client
     *
     * @param \Acme\DevisBundle\Entity\Client $client
     * @return Axe
     */
    public function setClient(\Acme\DevisBundle\Entity\Client $client = null)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return \Acme\DevisBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set serrure_sur_lame
     *
     * @param boolean $serrureSurLame
     * @return Axe
     */
    public function setSerrureSurLame($serrureSurLame)
    {
        $this->serrure_sur_lame = $serrureSurLame;
    
        return $this;
    }

    /**
     * Get serrure_sur_lame
     *
     * @return boolean 
     */
    public function getSerrureSurLame()
    {
        return $this->serrure_sur_lame;
    }
    
    public function __toString()
    {
             $axeValue  ="Caracteristiques d'un axe :\n";
             $axeValue .="Qauantite = ".$this->quantite."\n";
             $axeValue .="Largueur  = ".$this->largeur." mm\n";
             $axeValue .="Hauteur   = ".$this->hauteur." mm\n";
             $manoeuvre ="";
             switch ($this->manoeuvre)
             {
                 case 0;
                     $manoeuvre ="Moteur Central";
                     break;
                 case 1 :
                     $manoeuvre ="Moteur Manuel";
                     break;
                 case 2:
                     $manoeuvre ="Moteur Tubulaire";
                     break;
             }
             $axeValue .="Manoeuvre = ".$manoeuvre."\n";
             $axeValue .="Enroulement = ". ($this->enroulement == 0 ? "Interieur" : "Exterieur") ."\n";
             $axeValue .="Sortie Fils = ". ($this->sortie_fils == 0 ? "Droite" : "Gauche") ."\n";
             $tab="";
             switch ($this->tablier)
             {
                 case 0:
                     $tab = "Lames de 107 pleines de 7/10";
                     break;
                 case 1:
                     $tab = "Lames de 107 pleines de 9/10";
                     break;
                 case 2:
                     $tab = "Lames de 107 pleines micro perforées 9/10";
                     break;
                 case 3:
                     $tab = "Grille en tube ondulé";
                     break;
             }
             $axeValue .="Tablier = ".$tab."\n";
             
             $axes ="";
             switch ($this->axe)
             {
                 case 0:
                     $axes = "Axe 60";
                     break;
                 case 1:
                     $axes= "Axe 76";
                     break;
                 case 2:
                     $axes = "Axe 133";
                     break;
                 case 3:
                     $axes = "Axe 168";
                     break;
             }
             $axeValue .="Axe = ".$axes."\n";
             
             $joues = "";
              switch ($this->joues)
              {
                 case 0:
                     $joues = "340x340";
                     break;
                 case 1:
                     $joues= "370x370";
                     break;
                 case 2:
                     $joues = "400x400";
                     break;
              }
             $axeValue .="Joues = ".$joues."\n";
             
             $boites ="";
             switch ($this->boite)
              {
                 case 0:
                     $boites = "Boite à 1 boutton";
                     break;
                 case 1:
                     $boites = "Boite à clés";
                     break;
                 case 2:
                     $boites = "Boite à clés sans débrayage";
                     break;
              }
             
             for($i = 0; $i<count($this->boutton);$i++)
             {
                    if($this->boutton[$i] == 0)
                    {
                        $boites.="  &  1 Blindor ";
                    }
                    elseif($this->boutton[$i] == 1)
                    {
                        $boites.="  &  1 Kit recepteur + emetteur";
                    }                     
             }
             
             $axeValue .="Accessoires = ".$boites."\n";
                                       
             $axeValue .="Numero de RAL = ".$this->numero_ral."\n";
             
             return $axeValue;        
    }
}