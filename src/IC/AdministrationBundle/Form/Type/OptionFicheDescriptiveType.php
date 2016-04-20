<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OptionFicheDescriptiveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {                                     
        $builder->add('optionProduitFini', EntityType::class, array('label' => ' ',
                      'class' => 'IC\AdministrationBundle\Entity\OptionProduitFini',
                      'choice_label' => 'nom',
                      'multiple'  => false));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\OptionFicheDescriptive'));
    }
    
    public function getName()
    {
        return 'optionficheDescriptiveType';
    }
}
