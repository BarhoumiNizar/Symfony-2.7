<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SessionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebutSession', 'date' ,array('attr'=>array('class'=>'form-control',
                                                                  'value'=>date('Y-m-d')),
									'widget'=>'single_text',
									'label'=>' date start',
                                                                         ))
            ->add('dateFinSession','date',array('attr'=>array('class'=>'form-control'
                                                                             ,'value'=>date('Y-m-d')),
									'widget'=>'single_text',
									'label'=>' date end'))
            
                ->add('user','text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\SessionUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_session';
    }
}
