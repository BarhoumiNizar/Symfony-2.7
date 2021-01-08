<?php

namespace PFE\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class villeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomVille', 'choice', array('attr' => array('class' => 'form-control',
                    ),
                    'label' => 'Nom de ville',
                    'choices' => array('tunis' => 'Tunis',
                        'ariana' => 'Ariana', 'ben Arus' => 'Ben Arus', 'ville4' => 'manouba',
                        'manouba' => 'Manouba', 'nabeul' => 'Nabeul', 'bizerte' => 'Bizerte', 'mahdia' => 'Mahdia',
                        'monastir' => 'Monastir', 'jandouba' => 'Jendouba', 'beja' => 'Beja', 'kairouan' => 'Kairouan',
                        'gabes' => 'Gabes', 'gafsa' => 'Gafsa', 'kassrine' => 'Kasserine', 'kbeli' => 'Kbeli',
                        'zaghouan' => 'Zaghouan', 'sfax' => 'Sfax', 'sisi bou zid' => 'Sidi Bou Zid', 'sousse' => 'Sousse',
                        'tozeur' => 'Tozeur', 'tatawin' => 'Tatawin', 'siliana' => 'siliana', 'medenine' => 'Medenine',
            )))
                ->add('localisationVille','text', array('attr' => array('class' => 'form-control'),
                                                  'label' => 'Latitude'))
                ->add('mapVille','text',  array('attr' => array('class' => 'form-control'),
                                        'label' => 'Longitude'))
                ->add('description')
                ->add('idCapteur', 'entity', array(
                    'class' => 'applicationBundle:Capteur',
                    'property' => 'name',
                    'multiple' => false, 'attr' => array('class' => 'form-control'),
                    'label' => 'Capteur'))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'PFE\symfony2Bundle\Entity\ville'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'pfe_symfony2bundle_ville';
    }

}
