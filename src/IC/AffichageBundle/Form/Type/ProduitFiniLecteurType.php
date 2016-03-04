<?php

namespace IC\AffichageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitFiniLecteurType extends AbstractType
{
  
  public function buildForm(FormBuilderInterface $builder, array $options)
  {

      
    $builder->add('recherche', TextType::class, array('required' => false));
                                   
    $builder->add('type', EntityType::class, array(
                    'class' => 'IC\AffichageBundle\Entity\SousTypeLecteur',
                    'choice_label' => 'nom',
                    'multiple' => true,
                    'expanded' => true));
                
    $builder->add('frequence', ChoiceType::class, array('choices' => array('13,56 MHz' => 1, '125 KHz' => 2),
                    'multiple' => true,
                    'expanded' => true,
                    'empty_data'  => 0));                              
              
   $builder->add('Rechercher', SubmitType::class);                                                 
    $builder->add('Trier', SubmitType::class);
  }

  public function getName()
  {
    return 'formProduitFiniLecteur';
  }
  
  public function getType()
  {
    return $this->type;
  }
}
