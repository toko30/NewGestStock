<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class IdentifiantType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('reference', TextType::class, array('required' => true));
        $builder->add('designation', TextType::class, array('required' => true));
        
        $builder->add('frequence', ChoiceType::class, array('choices' => array('13,56MHz' => 1, '125KHz' => 2),
                      'multiple' => false,
                      'expanded' => false));
                                        
        $builder->add('sousTypeBadge', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\SousTypeBadge',
                      'choice_label' => 'nom',
                      'multiple'  => false));       
                      
        $builder->add('idFournisseur', HiddenType::class); 
                                  
        $builder->add('submit_identifiant', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\TypeBadge'));
    }
    
    public function getName()
    {
        return 'identifiantType';
    }
}
