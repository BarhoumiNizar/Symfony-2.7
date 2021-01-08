<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParametreStandardType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomStandard','text')
            ->add('valeurmax','text')
            ->add('valeurmin','text')
            ->add('unite','entity',array(
                                            'class'    => 'applicationBundle:grandeurMesure',
                                            'property' => 'name',
                                            'multiple' => false,'attr'=>array('class'=>'form-control'),'label'=>'unité'))
                                                                                                                 

            ->add('description','textarea')
                ->add('capteurstandard','entity', array(
  'class'    => 'applicationBundle:typeCapteur',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Capteur de '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\ParametreStandard'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_parametrestandard';
    }
}
