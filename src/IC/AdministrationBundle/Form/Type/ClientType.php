<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use IC\AdministrationBundle\Repository\FournisseurRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClientType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                
        $builder->add('nom', TextType::class, array('required' => true));
        $builder->add('refCompta', TextType::class, array('required' => true));

        $builder->add('submit_client', SubmitType::class, array('attr' => array('class' => 'buttonAdd')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\Client'));
    }
    
    public function getName()
    {
        return 'clientType';
    }  
}
