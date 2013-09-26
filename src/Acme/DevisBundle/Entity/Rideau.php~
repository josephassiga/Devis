<?php

namespace Acme\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rideau
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rideau
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
     * @var boolean
     *
     * @ORM\Column(name="enroulement", type="boolean")
     */
    private $enroulement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sortie_fils", type="boolean")
     */
    private $sortie_fils;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tablier", type="boolean")
     */
    private $tablier;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="serrure_sur_lame", type="boolean")
     */
    private $serrure_sur_lame;

    /**
     * @var boolean
     *
     * @ORM\Column(name="axe", type="boolean")
     */
    private $axe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="joues", type="boolean")
     */
    private $joues;

    /**
     * @var boolean
     *
     * @ORM\Column(name="coffre_laquage", type="boolean")
     */
    private $coffre_laquage;
    
     /**
     * @var string
     *
     * @ORM\Column(name="numero_ral", type="string",length=255)
     */
    private $numero_ral;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="boite", type="boolean",nullable=true)
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
     * @ORM\ManyToOne(targetEntity="Client",inversedBy="rideau",cascade={"persist"})
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
     * @return Rideau
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
     * @return Rideau
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
     * Set hauteur
     *
     * @param integer $hauteur
     * @return Rideau
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
     * Set manoeuvre
     *
     * @param integer $manoeuvre
     * @return Rideau
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
     * @return Rideau
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
     * @return Rideau
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
     * @return Rideau
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
     * @return Rideau
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
     * @return Rideau
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
     * Set client
     *
     * @param \Acme\DevisBundle\Entity\Client $client
     * @return Rideau
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
     * Set coulisse
     *
     * @param boolean $coulisse
     * @return Rideau
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
     * Set coffre_laquage
     *
     * @param boolean $coffreLaquage
     * @return Rideau
     */
    public function setCoffreLaquage($coffreLaquage)
    {
        $this->coffre_laquage = $coffreLaquage;
    
        return $this;
    }

    /**
     * Get coffre_laquage
     *
     * @return boolean 
     */
    public function getCoffreLaquage()
    {
        return $this->coffre_laquage;
    }

    /**
     * Set numero_ral
     *
     * @param string $numeroRal
     * @return Rideau
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
     * @return Rideau
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
     * @return Rideau
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
     * Set hauteur_enroulement
     *
     * @param boolean $hauteurEnroulement
     * @return Rideau
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
     * Set serrure_sur_lame
     *
     * @param boolean $serrureSurLame
     * @return Rideau
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
             $rideau  = "Caracteristiques du Rideau :\n";
             $rideau .="Qauantite = ".$this->quantite."\n";
             $rideau .="Largueur  = ".$this->largeur." mm\n";
             $rideau .="Hauteur   = ".$this->hauteur." mm\n";
             switch ($this->manoeuvre)
             {
                 case 0;
                     $manouvre ="Moteur Central";
                     break;
                 case 1 :
                     $manouvre ="Moteur Manuel";
                     break;
                 case 2:
                     $manouvre ="Moteur Tubulaire";
                     break;
             }
             $rideau .="Manoeuvre = ".$manouvre."\n";
             $rideau .="Enroulement = ". ($this->enroulement == 0 ? "Interieur" : "Exterieur") ."\n";
             $rideau .="Sortie Fils = ". ($this->sortie_fils == 0 ? "Droite" : "Gauche") ."\n";
             switch ($this->tablier)
             {
                 case 0:
                     $tab = "Lames de 107 pleines de 7/10";
                     break;
                 case 1:
                     $tab = "Lames de 107 pleines de 9/10";
                     break;
                 case 2:
                     $tab = "Lames de 107 pleines micro perforees 9/10";
                     break;
                 case 3:
                     $tab = "Grille en tube ondule";
                     break;
             }
             $rideau .="Tablier = ".$tab."\n";
             
             if($this->serrure_sur_lame == 1)
             {
                 $rideau .="Serrure sur lame finale \n";
             }
             
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
             $rideau .="Axe = ".$axes."\n";
             
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
             $rideau .="Joues = ".$joues."\n";
             
             switch ($this->boite)
              {
                 case 0:
                     $boites = "Boite a 1 boutton";
                     break;
                 case 1:
                     $boites = "Boite a cles";
                     break;
                 case 2:
                     $boites = "Boite a cles sans debrayage";
                     break;
              }
             
             for($i = 0; $i<count($this->boutton);$i++)
             {
                    if($this->boutton[$i] == 0)
                    {
                        $boites.="  &  1 Blindor ";
                    }
                    else
                    {
                        $boites.="  &  1 Kit recepteur + emetteur";
                    }                     
             }
             
             $rideau .="Accessoires = ".$boites."\n";
             
              $option ="";
             for($i = 0; $i<count($this->coffre_laquage);$i++)
             {
                    if($this->coffre_laquage[$i] == 0)
                    {
                         $option.="  &  Coffre ";
                    }
                    elseif($this->coffre_laquage[$i] == 1)
                    {
                         $option.="  &  Laquage du Coffre ";
                    }
                    elseif($this->coffre_laquage[$i] == 2)
                    {
                         $option.="  &  Laquage des coulisses";
                    }
                    elseif($this->coffre_laquage[$i] == 2)
                    {
                         $option.="  &  Laquage des lames intermediaires";
                    }
                    else
                    {
                         $option.="  &  Laquage de la lame finale";
                    }                     
             }
             
             $rideau .="Options = ".$option."\n";
             $rideau .="Numero de RAL = ".$this->numero_ral."\n";
             return $rideau;
             
    }
}