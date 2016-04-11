<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use IC\AdministrationBundle\Repository\SousFamilleRepository;

class EtapeType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $builder->add('nom', TextType::class, array('required' => true));
        
        $builder->add('submit_etape', SubmitType::class, array('attr' => array('class' => 'buttonAdd')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\Etape'));
    }
        
    public function getName()
    {
        return 'etapeType';
    }
}
