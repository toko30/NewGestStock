<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FournisseurType extends AbstractType
{
       
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('nom', TextType::class, array('required' => true));
        $builder->add('contact', TextType::class, array('required' => false));
        $builder->add('email', TextType::class, array('required' => false));
        $builder->add('numero', TextType::class, array('required' => false));
        $builder->add('site', TextType::class, array('required' => false));
      
        $builder->add('type', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\TypeProduit',
                      'choice_label' => 'nom',
                      'multiple'  => false));

        $builder->add('submit_fournisseur', SubmitType::class, array('attr' => array('class' => 'buttonAdd')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\Fournisseur', 'inherit_data' => false));
    }
        
    public function getName()
    {
        return 'formFournisseurType';
    }
}
