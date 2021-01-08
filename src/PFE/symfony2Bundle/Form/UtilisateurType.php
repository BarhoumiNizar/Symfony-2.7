<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomUtilisateur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Name '),
											    'label'=>'Nom'))
            ->add('prenomUtilisateur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'First name '),
											      'label'=>'Prénom'))
            ->add('cinUtilisateur','integer',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Identity number '),
											    'label'=>'N°Cin '))
           
            ->add('dteNaissanceUtilisateur','date',array('attr'=>array('class'=>'form-control'),
									'widget'=>'single_text',
									'label'=>' Date de Naissance'))
            ->add('telUtilisateur','integer',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'phoe number'),
											       'label'=>'Mobile'))
            ->add('adressUtilisateur','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Address'),
													'label'=>'Adresse'))
            ->add('login','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'UserName'),
													'label'=>'Login'))
            ->add('motpasse','text',array('attr'=>array('class'=>'form-control',
			                                                  'placeholder'=>'Mot de passe '),
											    'label'=>'Password'))
            ->add('fonction','choice',array('attr'=>array('class'=>'form-control',
			                                'placeholder'=>'Fonction'),
                                                        'label'=>'Rôle',
                                                        'choices'=>array('user'=>'User',
                                                                          'admin'=>'Admin')))
            ->add('dateAjoutUtilisateur','date',array('attr'=>array('value'=>date('Y-m-d')),
													'attr'=>array('class'=>'form-control'),
														'widget'=>'single_text',												'label'=>' Date added')
			)
            ->add('photo','file',array('data_class'=>null,'label'=>'Photo'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfe_symfony2bundle_utilisateur';
    }
}
