<?php

namespace IC\TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use IC\AdministrationBundle\Repository\SousFamilleRepository;

class numSerieType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('numSerie', TextType::class, array('required' => true, 'label'=>'Rechercher un numéro de série '));
        
        $builder->add('rechercher', SubmitType::class, array('attr' => array('class' => 'buttonSubmitNumSerie')));
    }
        
    public function getName()
    {
        return 'NumSerieType';
    }
}
