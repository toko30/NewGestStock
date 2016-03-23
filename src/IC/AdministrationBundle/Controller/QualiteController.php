<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\Etape;
use IC\AdministrationBundle\Form\Type\EtapeType;

class QualiteController extends Controller
{
    public function affichageNomenclatureQualiteAction()
    {   
        $em = $this->getDoctrine()->getManager();
        
        $listeNomenclatures = $em->getRepository('ICAdministrationBundle:Nomenclature')->findAll();
        
        return $this->render('ICAdministrationBundle:qualite:affichageNomenclature.html.twig', array('partie' => 'Administration',
                                                                                                     'listeNomenclatures' => $listeNomenclatures));
    }
    
    public function affichageGestionQualiteAction($idEtape)
    {   
        $em = $this->getDoctrine()->getManager();
        $etape = new Etape();
        $listeEtapes = $em->getRepository('ICAdministrationBundle:Etape')->findAll();
        $formEtape = $this->createForm(EtapeType::class, $etape, array('action' => $this->generateUrl('ic_administration_affichage_gestion_qualite_add_etape')))->createView();
        
        return $this->render('ICAdministrationBundle:qualite:affichageGestionEtape.html.twig', array('partie' => 'Administration',
                                                                                                'form' => $formEtape,
                                                                                                'listeEtapes' => $listeEtapes));
    }
    
    public function addGestionQualiteAction(request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $etape = new Etape();
        $data = $request->get('etape');
        
        $etape->setNom($data['nom']);
        $em->persist($etape);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_qualite');
    }
    
}
