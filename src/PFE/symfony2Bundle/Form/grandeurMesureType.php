<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class grandeurMesureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomUniteMesure','text',array(
                'attr'=>array('class'=>'form-control'),
				'label'=>'Unité de mesure'))
            ->add('normeUniteMesure','text',array(
                'attr'=>array('class'=>'form-control'),
				'label'=>'symbole'))
            ->add('description','textarea',array(
                'attr'=>array('class'=>'form-control'),
				'label'=>'descripeyion'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\grandeurMesure'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_grandeurmesure';
    }
}
