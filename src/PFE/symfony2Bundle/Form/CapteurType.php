<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCapteur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Nom Capteur'),
											    'label'=>'Nom'))
            ->add('modeleCapteur','choice',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Modéle '),
                                                                           'label'=>'Modéle',
                                                                            'choices'=>array('Fixe'=>'Fixe',
                                                                             'Mobile'=>'Mobile',
                                                                                )))
            ->add('systemeCapteur','choice',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Systeme'),
											    'label'=>'Systeme',
                                                                            'choices'=>array('Passif'=>'Passif',
                                                                             'Actif'=>'Actif',
                                                                                )))
            ->add('processCapteur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Process '),
											    'label'=>'Process'))
            ->add('precisionCapteur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Precision'),
											    'label'=>'Precision'))
            ->add('poidsCapteur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Poids '),
											    'label'=>'Poids'))
            ->add('capaciteCapteur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Capacite '),
											    'label'=>'Capacite'))
            ->add('dtePremUtilisation','date',array('attr'=>array('class'=>'form-control'),'widget'=>'single_text',
											'label'=>' 1er utilisation'))
            ->add('dateFabrication','date',array('attr'=>array('class'=>'form-control'),'widget'=>'single_text',
											'label'=>' date fabrication'))
            ->add('dateExpiration','date',array('attr'=>array('class'=>'form-control'),'widget'=>'single_text',
											'label'=>' Date expiration '))
            ->add('descriptionCapteur','textarea',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Description '),
											    'label'=>'Description'))
        ->add('typecapteur','entity', array(
  'class'    => 'applicationBundle:typeCapteur',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Type Capteur')
)
                 ->add('idOrigine','entity', array(
  'class'    => 'applicationBundle:OrigineFabrication',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'),
                     'label'=>'Origine'))
    ->add('etat','choice',array('choices'=>array(
                                                          'Actif'=>'actif',
                                                          'Désactivé'=>'désactivé')
                                        ,'multiple' => false,'label'=>'Etat'))           
                ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\Capteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_capteur';
    }
}
