<?php

namespace IC\ApprovisionnementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApprovisionnementPFController extends Controller
{
    public function approProduitsFinisIdentifiantsAction()
    {       
        $em = $this->getDoctrine()->getManager();
        
        $fournisseurs = $em->getRepository('ICApprovisionnementBundle:Fournisseur')->getAllPF(2);
        
        return $this->render('ICApprovisionnementBundle:PF:identifiant.html.twig', array('partie' => 'approvisionnement', 'fournisseurs' => $fournisseurs));
    }
    
    public function approProduitsFinisAutresAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeLecteur = $em->getRepository('ICApprovisionnementBundle:Fournisseur')->getAllPF(3);
        $autre = $em->getRepository('ICApprovisionnementBundle:Fournisseur')->getAllPF(4);
        
        return $this->render('ICApprovisionnementBundle:PF:autre.html.twig', array('partie' => 'approvisionnement', 
                                                                                   'fournisseursLecteurs' => $typeLecteur,
                                                                                   'fournisseursAutres' => $autre));
    }

    public function calculApproIdentifiantAction(request $request, $idFournisseur)
    {
        //Ajout des identifiants en BDD
        $this->container->get('ic_approvisionnement_pf')->addApproIdentifiant($request, $idFournisseur);
        
        return $this->redirectToRoute('ic_approvisionnement_pf_identifiant');
    }
    
    public function calculApproAutreAction(request $request, $idFournisseur)
    {        
        //Ajout des autres produits fini en BDD
        $this->container->get('ic_approvisionnement_pf')->addApproAutre($request, $idFournisseur);
                
        return $this->redirectToRoute('ic_approvisionnement_pf_autre');
    }
}
