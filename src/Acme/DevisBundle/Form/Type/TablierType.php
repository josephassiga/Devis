<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DevisBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Acme\DevisBundle\Form\Type\ClientType;

/**
 * Description of TablierType
 *
 * @author joseph
 */

class TablierType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add('quantite','text')
                ->add('largeur','text',array('label' => 'millimètre'))
                ->add('finie_largeur','radio',array('label' => 'finie'))
                ->add('hauteur','text',array('label' => 'millimètre'))
                ->add('finie_hauteur','radio',array('label' => 'finie'))
                ->add('lames','choice',array(
                    'choices'=>array(
                        '0'=>'Lames de 107 pleines 7/10',
                        '1'=>'Lames de 107 pleines 9/10',
                        '2'=>'Lames de 107 micro perforées 9/10',
                        '3'=>'Grille en tube ondulé'
                    ),
                    'expanded' => true                                       
                ))                
                ->add('serrure_sur_lame','checkbox',array('label' => 'Serrure sur lame finale','required'=>false))
                ->add('laquage_lames','choice',array(
                    'choices'=>array(
                    '0' => 'Laquage des lames intermédiaires',
                    '1' => 'Laquage des lames finale'),
                    'expanded' => true                    
                  ))               
                ->add('numero_ral','text',array('label' => 'Numero de RAL','required'=>false))                              
                ->add('client',new ClientType());        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DevisBundle\Entity\Tablier',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // une clé unique pour aider à la génération du jeton secret
            'intention' => 'tablier_item',
            'cascade_validation' => true));
    }
    
    
    public function getName()
    {        
        return 'tablier';
    }   
}

?>
