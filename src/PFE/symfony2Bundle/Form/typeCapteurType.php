<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class typeCapteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomTypeCapteur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Nom Capteur'),
											    'label'=>'Capteur de :'))
            
            ->add('descriptionTypeCapteur','textarea',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Nom Capteur'),
											    'label'=>'Description'))
       ->add('image','file',array('data_class'=>null))
               
->add('unite','entity', array(
  'class'    => 'applicationBundle:grandeurMesure',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'unite')
)
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\typeCapteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_typecapteur';
    }
}
