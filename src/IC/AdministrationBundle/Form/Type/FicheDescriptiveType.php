<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FicheDescriptiveType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {       
        $builder->add('nom', TextType::class, array('required' => true));       
                
        $builder->add('designation', TextType::class, array('required' => true));                                             
                                              
        $builder->add('frequence', ChoiceType::class, array('choices' => array('13,56MHz' => 1, '125KHz' => 2),
                      'multiple' => false,
                      'expanded' => false));  
                                            
        $builder->add('petite', ChoiceType::class, array('choices' => array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5),
                      'multiple' => false,
                      'expanded' => false));
                       
        $builder->add('moyenne', ChoiceType::class, array('choices' => array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5),
                      'multiple' => false,
                      'expanded' => false));
                      
        $builder->add('grande', ChoiceType::class, array('choices' => array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5),
                      'multiple' => false,
                      'expanded' => false));
                                            
        $builder->add('submit_fiche_descriptive', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\FicheDescriptive'));
    }
    
    public function getName()
    {
        return 'lecteurType';
    }
}
