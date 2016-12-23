<?php

namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * Forumulaire utile au magasinier pour choisir
 * la visibilité des produits.
 */
class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
        $builder
            ->setMethod($options["method"])
            ->add('visible', 
                  EntityType::class, 
                  array('class' => 'AppBundle:Produit',
                        'choice_label' => 'nomproduit',
                        'multiple' => true,
                        'expanded' => false))
            ->add('switch', SubmitType::class, array('label' => 'Changer visibilité'))
        ;
    }
}