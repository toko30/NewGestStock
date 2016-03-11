<?php

namespace IC\ApprovisionnementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use IC\ApprovisionnementBundle\Repository\FournisseurRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MatierePremiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {          
                                        
        $builder->add('famille', EntityType::class, array(
                        'class' => 'IC\ApprovisionnementBundle\Entity\Famille',
                        'choice_label' => 'nom',
                        'multiple' => true,
                        'expanded' => true));
                    
        $builder->add('sousFamille', EntityType::class, array(
                        'class' => 'IC\ApprovisionnementBundle\Entity\SousFamille',
                        'choice_label' => 'nom',
                        'multiple' => true,
                        'expanded' => true));                                         
                        
        $builder->add('fournisseur', EntityType::class, array(
                      'class' => 'IC\ApprovisionnementBundle\Entity\Fournisseur',
                      'choice_label' => 'nom',
                      'multiple'  => true,
                      'expanded' => true,
                      'query_builder' => function (FournisseurRepository $er) 
                      {
                        return $er->createQueryBuilder('f')
                        ->where('f.type = 1');
                      }
                      ));
                                        
        $builder->add('Trier', SubmitType::class);
    }

    public function getName()
    {
        return 'formApproMatierePremiere';
    }
}
