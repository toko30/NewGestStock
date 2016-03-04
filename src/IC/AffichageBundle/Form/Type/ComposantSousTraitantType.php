<?php

namespace IC\AffichageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ComposantSousTraitantType extends AbstractType
{
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('recherche', TextType::class, array('required' => false));

        $builder->add('choixRecherche', ChoiceType::class, array('choices' => array('Désignation' => 0, 'Référence' => 1),
                        'multiple' => false,
                        'expanded' => true,
                        'empty_data'  => 0));
                                        
        $builder->add('famille', EntityType::class, array(
                        'class' => 'IC\AffichageBundle\Entity\Famille',
                        'choice_label' => 'nom',
                        'multiple' => true,
                        'expanded' => true));
                    
        $builder->add('sousFamille', EntityType::class, array(
                        'class' => 'IC\AffichageBundle\Entity\SousFamille',
                        'choice_label' => 'nom',
                        'multiple' => true,
                        'expanded' => true));            
                                    

        $builder->add('stock', TextType::class, array('required' => false));

        $builder->add('plus_ou_moins', ChoiceType::class, array('choices' => array('Supérieur' => 0, 'Inférieur' => 1),
                    'multiple' => false,
                    'expanded' => true,
                    'empty_data'  => 0));    
                    
        $builder->add('Rechercher', SubmitType::class);                                                 
        $builder->add('Trier', SubmitType::class);
    }

    public function getName()
    {
        return 'formComposantSousTraitant';
    }
}
