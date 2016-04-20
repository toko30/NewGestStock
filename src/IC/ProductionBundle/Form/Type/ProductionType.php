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
       
        
        foreach ($options['data']['listLastFicheDescriptive'] as $value) 
        {

            $option = '';
            foreach ($value->getFicheDescriptiveOption()->getOptionFicheDescriptive() as $value1) 
            {
                $option .= $value1->getOptionProduitFini()->getAbreviation().'-';
            }
            $option = trim($option, '-');
            
            $lisLastNom[$value->getFicheDescriptiveOption()->getFicheDescriptive()->getNom().'-'.$option.'-V'.$value->getVersion()] = $value->getId();
        }
        
        $builder->add('type', ChoiceType::class, array('choices' => array('Fiche Descriptive' => 0, 'Nomenclature' => 1)));
         
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
