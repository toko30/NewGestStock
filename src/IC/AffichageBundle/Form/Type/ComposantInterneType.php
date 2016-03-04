<?php

namespace IC\AffichageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use IC\AffichageBundle\Repository\FournisseurRepository;

class ComposantInterneType extends AbstractType
{
  
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

        $builder->add('recherche', TextType::class, array('required' => false));

        $builder->add('choixRecherche', ChoiceType::class, array('choices' => array('Désignation' => 0, 'Référence' => 1),
                        'multiple' => false,
                        'expanded' => true));
                                    
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
                    
        $builder->add('etat', ChoiceType::class, array('choices' => array('Stock suffisant' => 0, 'A commander' => 1),
                        'multiple' => true,
                        'expanded' => true,
                        'empty_data'  => 0)); 
                    
        $builder->add('fournisseur', EntityType::class, array(
                        'class' => 'IC\AffichageBundle\Entity\Fournisseur',
                        'choice_label' => 'nom',
                        'multiple'  => true,
                        'expanded' => true,
                        'query_builder' => function (FournisseurRepository $er) 
                        {
                            return $er->createQueryBuilder('f')
                            ->where('f.type = 1');
                        }
                        ));

        $builder->add('stock', TextType::class, array('required' => false));

        $builder->add('plus_ou_moins', ChoiceType::class, array('choices' => array('Supérieur' => 0, 'Inférieur' => 1),
                    'multiple' => false,
                    'expanded' => true,
                    'empty_data'  => 0));
                        
        $builder->add('rechercher', SubmitType::class);                                            
        $builder->add('trier', SubmitType::class);

	}
	
	public function getName()
	{
		return 'formComposantInterne';
	}
}
