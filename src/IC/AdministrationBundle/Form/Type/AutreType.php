<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AutreType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('reference', TextType::class, array('required' => true));
        $builder->add('designation', TextType::class, array('required' => true));        
                      
        $builder->add('typeAutre', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\TypeAutre',
                      'choice_label' => 'nom',
                      'multiple'  => false));  
                      
        $builder->add('idFournisseur', HiddenType::class);  
                              
        $builder->add('submit_autre', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\Autre'));
    }
    
    public function getName()
    {
        return 'autreType';
    }
}
