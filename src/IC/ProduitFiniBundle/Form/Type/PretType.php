<?php

namespace IC\ProduitFiniBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PretType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {     
        $builder->add('client', EntityType::class, array('required' => true,                   
                                                         'class' => 'IC\AdministrationBundle\Entity\Client',
                                                         'choice_label' => 'nom',
                                                         'multiple'  => false,
                                                         'placeholder' => 'Veuillez choisir un client',));  
                                                                                                        
        $builder->add('contact', TextType::class, array('required' => false, 'attr' => array('placeholder' => 'Contact')));
        $builder->add('numSerie', TextType::class, array('required' => true, 'attr' => array('placeholder' => 'Numéro de série')));
        $builder->add('remarque', TextareaType::class, array('required' => false, 'attr' => array('placeholder' => 'Ajoutez une remarque ici...')));
        $builder->add('dateEnvoi', DateType::class, array('required' => true, 
                                                          'widget' => 'single_text',
                                                          'data' => new \DateTime()));
        
        $builder->add('enregistrer_le_pret', SubmitType::class, array('attr' => array('class' => 'buttonSubmitNumSerie')));
    }
    
    public function getName()
    {
        return 'PretType';
    }
}
