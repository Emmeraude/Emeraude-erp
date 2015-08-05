<?php

namespace EPlan\PlanningBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UEGrilleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ue', new UEType())
            ->add('quality', 'choice', array('choices'=>array('obligatoire'=>'obligatoire', 'optionnelle'=>'optionnelle')))
           // ->add('ecs', 'entity', array('class' => 'EPlanPlanningBundle:Ec', 'property' => 'code', 'multiple'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EPlan\PlanningBundle\Entity\UEGrille'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eplan_planningbundle_uegrille';
    }
}
