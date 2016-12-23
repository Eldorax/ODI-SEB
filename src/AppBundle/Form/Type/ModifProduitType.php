<?php

namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * Forumulaire pour ajouter du stock au produits.
 */
class ModifProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
        $builder
            ->setMethod($options["method"])
            ->add('numproduit', 
                  EntityType::class, 
                  array('class' => 'AppBundle:Produit',
                        'choice_label' => 'nomproduit',
                        'multiple' => false,
                        'expanded' => false))
            ->add('qte', IntegerType::class, array('label' => 'Ajout'))
            ->add('switch', SubmitType::class, array('label' => 'Valider'))
        ;
    }
}