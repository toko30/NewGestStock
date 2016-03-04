<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FournisseurType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if(isset($options['data']['url']))
            $builder->setAction($options['data']['url']);
        
        $builder->add('nom', TextType::class, array('required' => true));

        $builder->add('submit_nomenclature', SubmitType::class, array('attr' => array('class' => 'buttonUpdate')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\Nomenclature'));
    }
    
    public function getName()
    {
        return 'nomenclatureType';
    }

}
