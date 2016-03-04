<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class LecteurAutreType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('reference', TextType::class, array('required' => true));
        $builder->add('designation', TextType::class, array('required' => true));
        
        $builder->add('frequence', ChoiceType::class, array('choices' => array('13,56MHz' => 1, '125KHz' => 2),
                      'multiple' => false,
                      'expanded' => false));
                                        
        $builder->add('sousTypeLecteur', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\SousTypeLecteur',
                      'choice_label' => 'nom',
                      'multiple'  => false));
                      
        $builder->add('petite', ChoiceType::class, array('choices' => array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5),
                      'multiple' => false,
                      'expanded' => false));
                       
        $builder->add('moyenne', ChoiceType::class, array('choices' => array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5),
                      'multiple' => false,
                      'expanded' => false));
                      
        $builder->add('grande', ChoiceType::class, array('choices' => array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5),
                      'multiple' => false,
                      'expanded' => false));
                      
        $builder->add('idFournisseur', HiddenType::class);                     
                                                   
        $builder->add('submit_lecteur_autre', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\TypeLecteurAutre'));
    }
    
    public function getName()
    {
        return 'lecteurAutreType';
    }
}
