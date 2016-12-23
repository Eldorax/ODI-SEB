<?php

namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanierChoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
        $builder
            ->setMethod($options["method"])
            ->add('login', TextType::class, array('label' => 'login'))
            ->add('isAttending', ChoiceType::class, array( 'choices'  => array(
                    'Maybe'    => null,
                    'Yes'      => true,
                    'No'       => false,
                    ),
                ))
            ;
    }
}