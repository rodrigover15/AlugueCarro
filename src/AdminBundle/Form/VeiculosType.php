<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class VeiculosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marca', ChoiceType::class, array(
               'choices'     => array(
                   'Renault' => 'Renault',
                   'Ford'    => 'Ford',
                   'VW'      => 'VW',
               ),
            ))
            ->add('ano',  DateType::class, array(
                'format'=> 'ddMM-yyyy'
                ))

            ->add('modelo')
            ->add('cor',  ChoiceType::class,array(
                'choices'   =>array(
                      'Azul' => 'Azul',
                      'Verde'    => 'Verde',
                     'Vermelho'      => 'Vermelho',
                ),
                 'expanded' => true,
                'multiple' => false
            ))
            ->add('categoria')
             ->add('cidade')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Veiculos'
        ));
    }
}
