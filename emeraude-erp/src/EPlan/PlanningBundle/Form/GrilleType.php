<?php

namespace EPlan\PlanningBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GrilleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ueGrilles', 'collection', array('type' => new UEGrilleType(), 'allow_add' => true, 'allow_delete' => true))
            ->add('numeroSemestre', 'integer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EPlan\PlanningBundle\Entity\Grille'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eplan_planningbundle_grille';
    }
}
