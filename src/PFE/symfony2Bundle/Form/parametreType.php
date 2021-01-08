<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class parametreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomParametre','text',array('attr'=>array('class'=>'form-control'),'label'=>'Paramètre'))
            ->add('valeurParametre','integer',array('attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Valeur'))
            ->add('descriptionParametre','textarea',array('attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Description'))
            ->add('unite','entity', array(
  'class'    => 'applicationBundle:grandeurMesure',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Unité')
)
           ->add('capteur','entity', array(
  'class'    => 'applicationBundle:Capteur',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Capteur')
)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\parametre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_parametre';
    }
}
