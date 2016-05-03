<?php

namespace IC\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IC\ApprovisionnementBundle\Form\Type\MatierePremiereType;
use IC\ApprovisionnementBundle\Form\Type\IdentifiantType;
use IC\ApprovisionnementBundle\Form\Type\AutreType;

class MenuController extends Controller
{
    public function menuAction($url)
    {
        //Connexion Doctrine
        $em = $this->getDoctrine()->getManager();
        
        $listeLot = $em->getRepository('ICTestBundle:Lot')->findAll();
        
        //génération du template Twig
        return $this->render('ICTestBundle:MenuVertical:menu.html.twig', array('listeLot' => $listeLot));
    }
}
