<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DevisBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Acme\DevisBundle\Form\Type\ClientType;

/**
 * Description of AxeType
 *
 * @author joseph_assiga
 */
class AxeType extends AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
       $builder->add('quantite','text',array('label' => 'Quantité'))
                ->add('largeur','text',array('label' => 'millimètre'))
                ->add('coulisse','choice',array(
                    'choices'=>array(
                        '0'=> 'dos de coulisse',
                        '1'=> '+ coulisse'),
                    'expanded' => true
                ))
                ->add('hauteur','text',array('label' => 'millimètre'))
                ->add('hauteur_enroulement','choice',array(
                    'choices'=>array(
                        '0'=> 'enroulement compris',
                        '1'=> '+ enroulement'),
                    'expanded' => true
                ))
                ->add("manoeuvre",'choice',array(
                    'choices'=>array(
                        '0'=>'Moteur central',
                        '1'=>'Manuel',
                        '2'=>'Moteur tubulaire'
                    ),
                    'expanded'=>true
                ))
                ->add("enroulement",'choice',array(
                    'choices'=>array(
                        '0'=>'intérieur',
                        '1'=>'extérieur'),
                    'expanded'=>true,
                ))
                ->add("sortie_fils",'choice',array(
                    'choices'=>array(
                        '0'=>'Droite',
                        '1'=>'Gauche'
                    ),
                    'expanded'=>true,
                ))
                ->add("axe",'choice',array(
                    'choices'=>array(
                        '0'=>'Axe de 60',
                        '1'=>'Axe de 76',
                        '2'=>'Axe de 133',
                        '3'=>'Axe de 168'
                    ),
                    'expanded'=>true
                ))
                ->add("joues",'choice',array(
                    'choices'=>array(
                        '0'=>'340x340',
                        '1'=>'370x370',
                        '2'=>'400x400'
                    ),
                    'expanded'=>true
                ))
                ->add('tablier','choice',array(
                    'choices'=>array(
                        '0'=>'Lames de 107 pleines 7/10',
                        '1'=>'Lames de 107 pleines 9/10',
                        '2'=>'Lames de 107 micro perforées 9/10',
                        '3'=>'Grille en tube ondulé'
                    ),
                    'expanded'=>true
                ))
                ->add('serrure_sur_lame',"checkbox",array('label'=>'Serrure sur lame finale','required'=>false))
                ->add('numero_ral','text',array('label'=>'N° de RAL','required'=>false))                
                ->add('boite','choice',array(
                    'choices'=>array(
                        '0'=>'Boite 1 boutton',
                        '1'=>'Boite à clés',
                        '2'=>'Boite à clés sans débrayage'),
                    'expanded'=>true
                ))
                ->add('boutton','choice',array(
                    'choices'=>array(
                        '0'=>'1 blindor',
                        '1'=>'1 kit récepteur + émétteur'),
                    'expanded'=>true,
                    'multiple'=>true
                ))
                ->add("client",new ClientType()); 
    }
    
     public function setDefaultOptions(OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array('data_class' => 'Acme\DevisBundle\Entity\Axe',
             'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention' => 'axe_item',
            'cascade_validation' => true));
    }
    
    
    public function getName() {
        return "axe";
    }    
}

?>
