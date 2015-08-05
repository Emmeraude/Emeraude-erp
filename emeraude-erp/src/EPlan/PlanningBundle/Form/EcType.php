<?php

namespace EPlan\PlanningBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EcType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('code')
            ->add('volHeuresTD')
            ->add('volHeuresCM')
            ->add('volHeuresTP')
            ->add('niveau')
<<<<<<< HEAD
            ->add('departement','entity',array('class'=>'EPlanPlanningBundle:Departement',
                                               'property'=>'nom',
                                               'multiple'=>false,
                                               'expanded'=>false))
=======
            ->add('departement')
>>>>>>> eea1c82c0eb0e23ab76a00fcf489ea99553eae9a
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EPlan\PlanningBundle\Entity\Ec'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eplan_planningbundle_ec';
    }
}
