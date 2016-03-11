<?php

namespace IC\AffichageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApprovisionnementController extends Controller
{
    public function approvisionnementInterneAction()
    {
        $appro = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:Appro')->getApproComposant();
        
        return $this->render('ICAffichageBundle:Appro:approInterne.html.twig', array('partie' => 'affichage', 'approvisionnement' => $appro));
    }

    public function approvisionnementIdentifiantAction()
    {
        $appro = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:Appro')->getApproIdentifiant();
        
        return $this->render('ICAffichageBundle:Appro:approIdentifiant.html.twig', array('partie' => 'affichage', 'approvisionnement' => $appro));
    }
    
    public function approvisionnementAutreAction()
    {
        $approLecteur = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:Appro')-> getApproLecteur();
        $approAutre = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:Appro')-> getApproAutre();
        
        return $this->render('ICAffichageBundle:Appro:approAutre.html.twig', array('partie' => 'affichage', 
                                                                                   'approLecteurs' => $approLecteur,
                                                                                   'approAutres' => $approAutre));
    }
}
