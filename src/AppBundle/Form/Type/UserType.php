<?php

namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Forumulaire d'authentification des utilisateurs.
 */
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
        $builder
            ->setMethod($options["method"])
            ->add('login', TextType::class, array('label' => 'login'))
            ->add('password', PasswordType::class, array('label' => 'Mot de passe'))	
            ->add('auth', SubmitType::class, array('label' => 'Authentifier'))
        ;
    }
}