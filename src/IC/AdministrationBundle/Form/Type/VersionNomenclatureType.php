<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VersionNomenclatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {                                     
        $builder->add('nomenclature', EntityType::class, array(
                      'class' => 'IC\AdministrationBundle\Entity\Nomenclature',
                      'choice_label' => 'nom',
                      'expanded' => true,
                      'multiple' => true));      
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\VersionNomenclature'));
    }
    
    public function getName()
    {
        return 'optionficheDescriptiveType';
    }
}
