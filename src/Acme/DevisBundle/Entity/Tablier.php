<?php

namespace Acme\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Tablier
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tablier
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
     * @ORM\Column(name="finie_largeur", type="boolean")
     */
    private $finie_largeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteur", type="integer")
     */
    private $hauteur;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="finie_hauteur", type="boolean")
     */
    private $finie_hauteur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lames", type="boolean")
     */
    private $lames;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="serrure_sur_lame", type="boolean")
     */
    private $serrure_sur_lame;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="laquage_lames", type="boolean")
     */
    private $laquage_lames;
     
   
    /**
     * @var string
     *
     * @ORM\Column(name="numero_ral", type="string",nullable=true)
     */
    private $numero_ral;


    /**
     * 
     * @ORM\ManyToOne(targetEntity="Client",inversedBy="tabliers",cascade={"persist"})
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     *
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
     * @return Tablier
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
     * @return Tablier
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
     * Set finie_largeur
     *
     * @param boolean $finieLargeur
     * @return Tablier
     */
    public function setFinieLargeur($finieLargeur)
    {
        $this->finie_largeur = $finieLargeur;
    
        return $this;
    }

    /**
     * Get finie_largeur
     *
     * @return boolean 
     */
    public function getFinieLargeur()
    {
        return $this->finie_largeur;
    }

    /**
     * Set hauteur
     *
     * @param integer $hauteur
     * @return Tablier
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
     * Set finie_hauteur
     *
     * @param boolean $finieHauteur
     * @return Tablier
     */
    public function setFinieHauteur($finieHauteur)
    {
        $this->finie_hauteur = $finieHauteur;
    
        return $this;
    }

    /**
     * Get finie_hauteur
     *
     * @return boolean 
     */
    public function getFinieHauteur()
    {
        return $this->finie_hauteur;
    }

    /**
     * Set lames
     *
     * @param boolean $lames
     * @return Tablier
     */
    public function setLames($lames)
    {
        $this->lames = $lames;
    
        return $this;
    }

    /**
     * Get lames
     *
     * @return boolean 
     */
    public function getLames()
    {
        return $this->lames;
    }

    /**
     * Set serrure_sur_lame
     *
     * @param boolean $serrureSurLame
     * @return Tablier
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

    /**
     * Set laquage_lames
     *
     * @param boolean $laquageLames
     * @return Tablier
     */
    public function setLaquageLames($laquageLames)
    {
        $this->laquage_lames = $laquageLames;
    
        return $this;
    }

    /**
     * Get laquage_lames
     *
     * @return boolean 
     */
    public function getLaquageLames()
    {
        return $this->laquage_lames;
    }

    /**
     * Set numero_ral
     *
     * @param string $numeroRal
     * @return Tablier
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
     * Set client
     *
     * @param \Acme\DevisBundle\Entity\Client $client
     * @return Tablier
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
    
    public function __toString()
    {
             $tablier  = "Caracteristiques d'un tablier :\n";
             $tablier .="Qauantite = ".$this->quantite."\n";
             $tablier .="Largueur  = ".$this->largeur." mm\n";
             $tablier .="Hauteur   = ".$this->hauteur." mm\n";
             
             $tab ="";
             switch ($this->lames)
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
             $tablier .="Tablier = ".$tab."\n";
             
             if($this->serrure_sur_lame == 1)
             {
                 $tablier .="Serrure sur lame finale \n";
             }
             
             $option ="";
             for($i = 0; $i<count($this->laquage_lames);$i++)
             {
                    if($this->laquage_lames[$i] == 0)
                    {
                         $option.="  &  Laquage des lames intermediaires";
                    }
                    elseif($this->laquage_lames[$i] == 1)
                    {
                         $option.="  &  Laquage de la lame finale";
                    }                     
             }
             
             $tablier .="Options = ".$option."\n";
             $tablier .="Numero de RAL = ".$this->numero_ral."\n"; 
             
             return $tablier;
    }
}