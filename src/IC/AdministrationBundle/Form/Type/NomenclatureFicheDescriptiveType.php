<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class NomenclatureFicheDescriptiveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {                                     
        $builder->add('versionNomenclature', CollectionType::class, array(
                      'entry_type' => VersionNomenclatureType::class,
                      'allow_add' => true));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\NomenclatureFicheDescriptive'));
    }
    
    public function getName()
    {
        return 'optionficheDescriptiveType';
    }
}