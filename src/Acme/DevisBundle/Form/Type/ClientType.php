<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DevisBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of ClientType
 *
 * @author joseph_assiga
 */
class ClientType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add("nom",'text')
                ->add("prenom",'text',array('required'=>false))
                ->add("adresse",'text')
                ->add("ville",'text')
                ->add("codepostal",'text',array('label'=>'code postal'))
                ->add('reference','text',array('required'=>false))
                ->add("telephone",'text')
                ->add("observation","textarea",array('required'=>false));        
    }

     public function setDefaultOptions(OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DevisBundle\Entity\Client',
             'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // une clé unique pour aider à la génération du jeton secret
            'intention' => 'client_item'
            ));
    }
    public function getName() {
         return "client";
    }    
}

?>
