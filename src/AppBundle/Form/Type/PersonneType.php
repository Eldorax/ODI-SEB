<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
        $builder
            ->add('genre', ChoiceType::class, 
                  array('choices' => array('M' => 'M', 'Mme'=> 'Mme'), 
                        'required' => false))
            ->add('nompersonne', TextType::class, array('label' => 'Nom'))
            ->add('prenompersonne', TextType::class, array('label' => 'Prenom'))
            ->add('email', EmailType::class, array('required' => false))
            ->add('personneabonnement', 
                    EntityType::class, 
                    array( 'class' => 'AppBundle:Abonnement',
                           'label' => 'Abonnement',
                           'required' => false))
        ;
    }
}