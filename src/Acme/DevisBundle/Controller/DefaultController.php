<?php

namespace Acme\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\DevisBundle\Entity\Tablier;

use Acme\DevisBundle\Form\Type\TablierType;

use Acme\DevisBundle\Form\Type\RideauType;

use Acme\DevisBundle\Form\Type\AxeType;

use Acme\DevisBundle\Entity\Axe;

use Acme\DevisBundle\Entity\Rideau;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
       $name ='Faites votre Devis';
       return $this->render('AcmeDevisBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function devisAction($name,Request $request)
    {
         if($name ==='devis_rideau')
         {    
              $titre = "Devis Rideau";
              $rideau = new Rideau();
              $form = $this->createForm(new RideauType(), $rideau);
              $form->handleRequest($request);
              $devis = $rideau;
              $prix = $this->prixRideau($rideau);
         }
         else if($name ==='devis_axe')
         {
              $titre = "Devis Axe";
              $axe = new Axe();
              $form = $this->createForm(new AxeType(), $axe);
              $form->handleRequest($request);
              $devis = $axe;
              $prix = $this->prixAxe($axe->getLargeur(),$axe->getTablier(),$axe->getHauteur(),$axe->getQuantite());
         }
         else if($name ==='devis_tablier')
         {
              $titre = "Devis Tablier";
              $tablier = new Tablier();
              $form = $this->createForm(new TablierType(), $tablier);
              $form->handleRequest($request);
              $devis = $tablier;
              $prix = $this->prixTablier($tablier->getLargeur(),$tablier->getLames(),$tablier->getHauteur(),$tablier->getSerrureSurLame(),$tablier->getQuantite());              
         }
         
         if($form->isSubmitted())
         {             
             //$this->genererFile($devis);            
             return $this->render('AcmeDevisBundle:Default:facture_'.substr($name, 6).'.html.twig',array('name' => $name,'devis'=>$devis,'prix'=>$prix));
         }
         
         return $this->render('AcmeDevisBundle:Default:'.$name.'.html.twig',array('name' => $titre,'form'=>$form->createView()));
    }
    
    public function factureAction($name)
    {        
        return $this->render('AcmeDevisBundle:Default:facture.html.twig',array('name' => $name));
    }
    
    public function prixTablier($largueur,$lames,$hauteur,$serrure_sur_lame,$quantite)
    {
            $longueur_lames = $largueur - 15;

            if($lames == '1')
            {
                $enroulement = 340;                
                $taux_lames =2.53;                
            }
            else if($lames == '2')
            {
                $enroulement = 340;                
                $taux_lames =2.85;
            }
            else
            {
               $enroulement = 370;               
               $taux_lames =2.11;
            }
            
            $nb_lames = (int)($hauteur + $enroulement)/107;

            if($serrure_sur_lame == true)
            {
                $prix_serrure = 4.47;
            }
            else
            {
                 $prix_serrure = 0.0;
            }   
            
            $prix_lames_final = (3.38*$longueur_lames)/1000;
            
            $prix_lames = ($nb_lames * $taux_lames*$longueur_lames)/1000;
            
            $prix_tige_serrure = ($longueur_lames *0.83)/1000;
            
            $prix_tablier = $prix_lames + $prix_lames_final +  $prix_tige_serrure  + $prix_serrure;
       
            return $prix_tablier*2.5*$quantite;
      }
      
      public function prixAxe($largeur,$tablier,$hauteur,$quantite)
      {
            $longueur_lames = $largeur - 15;

           if($tablier == '1')
            {
                $enroulement = 340;
                $taux_lames =2.53;                
            }
            else if($tablier == '2')
            {
                $enroulement = 340;
                $taux_lames =2.85;
            }
            else
            {
               $enroulement = 370;
               $taux_lames =2.11;
            }
            
            //choix du diamètre de l'axe:
            if($largeur < 5000)//60
            {
                $taux_diametre = 5;
                $prix_ressort = 20;
                
            }
            else//76
            {
               $taux_diametre = 6.41; 
                $prix_ressort = 40;
            }
            
            $prix_diametre = ($taux_diametre * $longueur_lames)/1000;                        
            
            $prix_boite_ressort = 17.76 * 6;            
            
            //$prix_ressort = (($hauteur + 500)*4/1000)*0.56*2.26;
                                   
            $prix_agraffe = 2.57*6;
                        
            $prix_plat_bombe = (1.97 * $longueur_lames*2)/1000;
            
            $prix_axe_seul = $prix_diametre + $prix_boite_ressort + $prix_ressort + $prix_agraffe + $prix_plat_bombe;
            
          return $prix_axe_seul * 2.5 * $quantite;
      }
      
      public function prixRideau(Rideau $rideau)
      {
          //Calcul du prix de l'axe seul
            $prix_axe_seul = ($this->prixAxe($rideau->getLargeur(), $rideau->getTablier(), $rideau->getHauteur(), $rideau->getQuantite()))/2.5;
                                      
          //Calu du prix du tablier.
          $prix_tablier = ($this->prixTablier($rideau->getLargeur(), $rideau->getTablier(), $rideau->getHauteur(), $rideau->getSerrureSurLame(), $rideau->getQuantite()))/2.5;
          
          $longueur_lames = $rideau->getLargeur() - 15;                  
          
          if($rideau->getJoues() == 0)//340
          {
             $prix_plaque_enroulemnt = 2 * 4.495; 
             
             $enroulement = 340;
          }
          else if($rideau->getJoues() == 1)//370
          {
              $prix_plaque_enroulemnt = 2.5 * 5.087;
              
              $enroulement = 370;
          }
          else if($rideau->getJoues() == 2)//400
          {
              $prix_plaque_enroulemnt = 2.5 * 5.243;
              
              $enroulement = 400;
          }
          
          
        $hauteur_enroulement = $rideau->getHauteur() + $enroulement;

        $nbre_lames = $hauteur_enroulement / 107;
         
        $poids_tablier = ($longueur_lames * ($nbre_lames + 2.35))/1000;
      
        if($poids_tablier < 180)
        {
            $prix_moteur = 68.89;
        }
        else
        {
            $prix_moteur = 152.4;
        }

        $prix_interrupteur_a_cle = 14.53;
      
      $prix_axe_motorise = $prix_axe_seul + $prix_moteur + $prix_interrupteur_a_cle;

      $prix_coulisse = ((3.1 * $rideau->getHauteur())*2)/1000;

      $prix_coulisse_plaque = $prix_coulisse + $prix_plaque_enroulemnt;

      $prix_rideau = $prix_axe_motorise + $prix_tablier + $prix_coulisse_plaque;
      
      return ($prix_rideau * 2.5 * $rideau->getQuantite());
    }
      
      public function genererFile($devis)
      {
          @mkdir("c:\\Devis", 0700);
          $file = "c:\\Devis\\".$devis->getClient()->getNom()."_".$devis->getClient()->getPrenom()."_".date("dmY").".doc";
          $facture  = $devis;
          $facture .= $devis->getClient();
          file_put_contents($file,iconv("ISO-8859-1","UTF-8", $facture));          
      }
     
      /**
     * Permet de gérer la page contact.
     * @return type     
     */
    public function contactAction($name)
    {
        $request = $this->getRequest();
               
       if($request->isMethod("POST"))
       {
                       
           $nom = $request->request->get("nom");    
           
           $email = $request->request->get("email");
           
           $website = $request->request->get("website");
           
           $body =  $request->request->get("message");
           
            $message = \Swift_Message::newInstance()
                   ->setSubject('Devis '+$name)
                   ->setFrom($email)
                   ->setTo("joseph.assiga@gmail.com")
                   ->setBody($this->renderView("AcmeRedditBundle:Default:message.html.twig", array('message'=>$body,'nom'=>$nom,'website'=>$website)))
                   ->setContentType("text/html");
           
           $this->get('mailer')->send($message);
           
          return $this->redirect( $this->generateUrl("acme_devis_homepage"));
           
       }
        return $this->render("AcmeDevisBundle:Default:index.html.twig",array('name'=>'contact'));
    }
    
}
