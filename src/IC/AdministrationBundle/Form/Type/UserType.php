<?php

namespace IC\AdministrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use IC\AdministrationBundle\Repository\FournisseurRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class);

        $builder->add('textRole', ChoiceType::class, array('choices' => array('ROLE_COMMERCE' => 'ROLE_COMMERCE', 'ROLE_PRODUCTION' => 'ROLE_PRODUCTION', 'ROLE_ADMIN' => 'ROLE_ADMIN'),
                      'multiple' => false,
                      'expanded' => false));  
              
        //$builder->add('submit_test', SubmitType::class, array('attr' => array('class' => 'buttonAdd')));
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'IC\AdministrationBundle\Entity\User'));
    }
    
    public function getName()
    {
        return 'userType';
    }
}