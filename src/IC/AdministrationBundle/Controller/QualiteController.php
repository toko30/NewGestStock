<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QualiteController extends Controller
{
    public function affichageNomenclatureQualiteAction()
    {   
        $em = $this->getDoctrine()->getManager();
        
        $listeNomenclatures = $em->getRepository('ICAdministrationBundle:Nomenclature')->findAll();
        
        return $this->render('ICAdministrationBundle:qualite:affichageNomenclature.html.twig', array('partie' => 'Administration',
                                                                                                     'listeNomenclatures' => $listeNomenclatures));
    }
    
    public function affichageGestionQualiteAction()
    {   
        $em = $this->getDoctrine()->getManager();
        
        $listeNomenclatures = $em->getRepository('ICAdministrationBundle:Etape')->findAll();

        return $this->render('ICAdministrationBundle:qualite:affichageGestion.html.twig', array('partie' => 'Administration',
                                                                                                'listeNomenclatures' => $listeNomenclatures));
    }
}
