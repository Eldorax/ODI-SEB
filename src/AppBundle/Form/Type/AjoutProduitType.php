<?php

namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Forumulaire d'ajout de nouveau produit.
 */
class AjoutProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
        $builder
            ->setMethod($options["method"])
            ->add('nomproduit', TextType::class, array('label' => 'Nom'))
            ->add('descriptif', TextareaType::class, array('label' => 'Descriptif'))
            ->add('categorie', ChoiceType::class, array('choices' => array('Papéterie' => 'papeterie', 'Plastique' => 'plastique')))
            ->add('qte', IntegerType::class, array('label' => 'Quantité'))
            ->add('qtemin', IntegerType::class, array('label' => 'Quantité min'))
            ->add('prix', MoneyType::class, array('label' => 'Prix'))
            ->add('peremption', DateType::class, array('label' => 'Péremption'))
            ->add('photo', FileType::class, array('label' => 'Photo'))
            ->add('visible', CheckboxType::class, array('label' => 'Visible', 'required' => false))
            ->add('switch', SubmitType::class, array('label' => 'Ajouter'))
        ;
    }
}