<?php

namespace IC\ApprovisionnementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AutreType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {                                  
        $builder->add('type', ChoiceType::class, array('choices' => array('Lecteur' => 0, 'Autre' => 1),
                        'multiple' => true,
                        'expanded' => true,
                        'empty_data'  => 0));
                        
        $builder->add('typeLecteur', EntityType::class, array(
                    'class' => 'IC\AffichageBundle\Entity\SousTypeLecteur',
                    'choice_label' => 'nom',
                    'multiple' => true,
                    'expanded' => true));
                    
        $builder->add('typeAutre', EntityType::class, array(
                    'class' => 'IC\AffichageBundle\Entity\TypeAutre',
                    'choice_label' => 'nom',
                    'multiple' => true,
                    'expanded' => true));
                                        
        $builder->add('Trier', SubmitType::class);
    }

    public function getName()
    {
        return 'formApproIdentifiant';
    }
}
