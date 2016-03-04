<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use IC\AdministrationBundle\Repository\FournisseurRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ComposantFournisseurType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                
        $builder->add('reference', TextType::class, array('required' => true));
        $builder->add('prix', TextType::class, array('required' => true));

        $builder->add('fournisseur', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\Fournisseur',
                      'choice_label' => 'nom',
                      'multiple'  => false,
                      'query_builder' => function (FournisseurRepository $er) 
                      {
                        return $er->createQueryBuilder('f')
                        ->where('f.type = 1');
                      }
                      ));

        $builder->add('submit_composant_fournisseur', SubmitType::class, array('attr' => array('class' => 'buttonAdd')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\ComposantFournisseur'));
    }
    
    public function getName()
    {
        return 'formComposantFournisseurType';
    }  
}
