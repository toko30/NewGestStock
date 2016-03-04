<?php

namespace IC\ApprovisionnementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IdentifiantType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {           

        $builder->add('frequence', ChoiceType::class, array('choices' => array( '13,56MHz' => 1, '125KHz' => 2),
                        'multiple' => true,
                        'expanded' => true,
                        'empty_data'  => 0));
                    
        $builder->add('type', EntityType::class, array(
                    'class' => 'IC\AffichageBundle\Entity\SousTypeBadge',
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
