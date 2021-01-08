<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaptureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateCapture','date',array('attr'=>array('class'=>'form-control','value'=>date('Y-m-d')/*,'readOnly'=>true*/),
									'widget'=>'single_text',
									'label'=>' Date Capture'
                                                                        )
                            )
            ->add('localisationCapture','text',array('attr'=>array('class'=>'form-control',
																	'placeholder'=>'Localisation '),
													'label'=>'Localisation'))
            ->add('zoom','choice',array('choices'=>array(
                                                          'Mod1'=>'Avec',
                                                          'Mod2'=>'Sans')
                                        ,'expanded'=>true,'label'=>'Zoom'))
            ->add('nomMesure','choice',array('attr'=>array('class'=>'form-control'),'choices'=>array('Température'=>'Température',
                                                                             'Humidité'=>'humidité',
                                                                    'Pression'=>'Pression'
                                                                                ),
                                           'label'=>'Mesure'))
            ->add('valeurMesure','integer',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Valeur de mesure '),
											    'label'=>'Valeur de mesure'))
            ->add('Mesure','entity',array(
  'class'    => 'applicationBundle:grandeurMesure',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'unité'))
            
		->add('capteur','entity', array(
  'class'    => 'applicationBundle:Capteur',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'Capteur')
)  
                ->add('Ville','entity',array(
  'class'    => 'applicationBundle:ville',
  'property' => 'name',
  'multiple' => false,'attr'=>array('class'=>'form-control'
			                                               ),'label'=>'ville'))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\Capture'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_capture';
    }
}
