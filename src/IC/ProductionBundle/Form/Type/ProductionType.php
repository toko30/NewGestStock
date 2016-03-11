<?php

namespace IC\ProductionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProductionType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach ($options['data']['listLastnomenclature'] as $key => $value) 
        {
            $lisLastNom[$value->getNomenclature()->getNom().'-V'.$value->getVersion()] = $value->getId();
        }
        
        $builder->add('quantite', TextType::class, array('required' => false));
                      
        $builder->add('versionNomenclature', ChoiceType::class, array('choices' => $lisLastNom,
                        'multiple' => false,
                        'expanded' => false));
        $builder->add('calculer', SubmitType::class);
    }

    public function getName()
    {
        return 'formProduction';
    }
}
