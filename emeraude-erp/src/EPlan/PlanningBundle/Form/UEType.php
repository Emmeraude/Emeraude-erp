<?php

namespace EPlan\PlanningBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UEType extends AbstractType
{
        /**
         * , 'querybuilder' => function(EPlan\PlanningBundle\Entity\EcRepository $r) use
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            //->add('numSemestre', 'text')
            ->add('code', 'text')
            ->add('ecs', 'entity', array('class' => 'EPlanPlanningBundle:Ec', 'property' => 'code', 'multiple'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EPlan\PlanningBundle\Entity\UE'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eplan_planningbundle_ue';
    }
}
