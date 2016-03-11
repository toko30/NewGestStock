<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ComposantType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('nom', TextType::class, array('required' => true));
        $builder->add('boitier', TextType::class, array('required' => false));
        $builder->add('stockMini', TextType::class, array('required' => true));

        $builder->add('famille', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\Famille',
                      'choice_label' => 'nom',
                      'multiple'  => false));
  
        $builder->add('sousFamille', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\SousFamille',
                      'choice_label' => 'nom',
                      'multiple'  => false));
        
        $builder->add('submit_composant', SubmitType::class, array('attr' => array('class' => 'buttonAdd')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\Composant'));
    }
        
    public function getName()
    {
        return 'formComposant';
    }
}
