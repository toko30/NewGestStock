<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use IC\AdministrationBundle\Repository\OptionFicheDescriptiveRepository;

class FicheDescriptiveOptionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {                
        $builder->add('designation', TextType::class, array('required' => true));                                             
                                              
        $builder->add('type', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\SousTypelecteur',
                      'choice_label' => 'nom',
                      'multiple'  => false));
                      
        $builder->add('optionFicheDescriptive', CollectionType::class, array(
                      'entry_type' => OptionFicheDescriptiveType::class,
                      'allow_add' => true));    
                                                              
        $builder->add('submit_fiche_descriptive', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\FicheDescriptiveOption'));
    }
    
    public function getName()
    {
        return 'lecteurType';
    }
}
