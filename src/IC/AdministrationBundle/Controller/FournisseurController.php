<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Form\Type\FournisseurType;
use IC\AdministrationBundle\Entity\Fournisseur;

class FournisseurController extends Controller
{
    public function affichageFournisseurAction($idFournisseur)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listFournisseur = $em->getRepository('ICAdministrationBundle:Fournisseur')->findAll();
        
        if($idFournisseur !== null)
        {
            $fournisseur = $em->getRepository('ICAdministrationBundle:Fournisseur')->find($idFournisseur);        
            $url = $this->generateUrl('ic_administration_fournisseur_update', array('idFournisseur' => $idFournisseur));
            
            $formFournisseur = $this->createForm(FournisseurType::class, $fournisseur, array('action' => $url));
        }  
        else
        {
            $fournisseur = new Fournisseur();
            $url = $this->generateUrl('ic_administration_fournisseur_add');
            $formFournisseur = $this->createForm(FournisseurType::class, $fournisseur, array('action' => $url));
        }
            
        
        return $this->render('ICAdministrationBundle:fournisseur:affichage.html.twig', array('partie' => 'Administration', 
                                                                                             'form' => $formFournisseur->createView(),
                                                                                             'idFournisseur' => $idFournisseur,
                                                                                             'fournisseurs' => $listFournisseur));
    }
    
    public function addFournisseurAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $formFournisseur = $this->createForm(FournisseurType::class);
        
        if ($formFournisseur->handleRequest($request)->isValid())
        {
            $data = $request->get('fournisseur');

            $typeProduit = $em->getRepository('ICAdministrationBundle:TypeProduit')->find($data['type']);

            $fournisseur = new Fournisseur();
            
            $fournisseur->setNom(strtoupper($data['nom']));
            $fournisseur->setContact($data['contact']);
            $fournisseur->setEmail($data['email']);
            $fournisseur->setNumero($data['numero']);
            $fournisseur->setSite($data['site']);
            $fournisseur->setTypeProduit($typeProduit);
            
            $em->persist($fournisseur);
            $em->flush($fournisseur);     
        }

        return $this->redirectToRoute('ic_administration_affichage_fournisseur');
    }
    
    public function updateFournisseurAction(Request $request, $idFournisseur)
    {
        $em = $this->getDoctrine()->getManager();

        $formFournisseur = $this->createForm(FournisseurType::class);
        
        if ($formFournisseur->handleRequest($request)->isValid())
        {
            $data = $request->get('fournisseur');

            $fournisseur = $em->getRepository('ICAdministrationBundle:Fournisseur')->find($idFournisseur); 
            $typeProduit = $em->getRepository('ICAdministrationBundle:TypeProduit')->find($data['type']);   
            
            $fournisseur->setNom(strtoupper($data['nom']));
            $fournisseur->setContact($data['contact']);
            $fournisseur->setEmail($data['email']);
            $fournisseur->setNumero($data['numero']);
            $fournisseur->setSite($data['site']);
            $fournisseur->setTypeProduit($typeProduit);
            
            $em->persist($fournisseur); 
            $em->flush($fournisseur);     
        }

        return $this->redirectToRoute('ic_administration_affichage_fournisseur');
    }
}
