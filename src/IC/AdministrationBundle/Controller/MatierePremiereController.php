<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use IC\AdministrationBundle\Form\Type\ComposantFournisseurType;
use IC\AdministrationBundle\Form\Type\ComposantType;
use IC\AdministrationBundle\Entity\ComposantFournisseur;
use IC\AdministrationBundle\Entity\Composant;


class MatierePremiereController extends Controller
{
    public function affichageMatierePremiereAction(request $request)
    {       
        $em = $this->getDoctrine()->getManager();
        
        //Partie Recherche et trie des composants
        if('POST' == $request->getMethod())
        {
            //recheche basique par composant
            $listComposant = $em->getRepository('ICAdministrationBundle:Composant')->getStockByCritere($request->get('formComposantInterne'));
        }
        else
            $listComposant = $em->getRepository('ICAdministrationBundle:Composant')->getStockByCritere(0);
            
        $composant = new Composant();
        $formComposant = $this->createForm(ComposantType::class, $composant, array('action' => $this->generateUrl('ic_administration_mp_add')));
        
        return $this->render('ICAdministrationBundle:MP:affichage.html.twig', array('partie' => 'Administration',
                                                                                    'form' => $formComposant->createView(),
                                                                                    'composants' => $listComposant));
    }
    
    public function affichageMatierePremiereDetailAction($idComposant, $idComposantFournisseur)
    {  
        $em = $this->getDoctrine()->getManager();
        
        $composant = $em->getRepository('ICAdministrationBundle:Composant')->find($idComposant);
        $listComposantFournisseur = $em->getRepository('ICAdministrationBundle:ComposantFournisseur')->getListComposantById($idComposant);     
        
        if($idComposantFournisseur != 0)
        {
            $composantFournisseur = $em->getRepository('ICAdministrationBundle:ComposantFournisseur')->find($idComposantFournisseur);           
        }
        else
            $composantfournisseur = new ComposantFournisseur();

        
        $formComposant = $this->createForm(ComposantType::class, $composant, array('action' => $this->generateUrl('ic_administration_mp_update', array('idComposant' => $idComposant))));
        $formComposantFournisseur = $this->createForm(ComposantFournisseurType::class, $composantfournisseur, array('action' => $this->generateUrl('ic_administration_composant_fournisseur_add', array('idComposant' => $idComposant))));
         
        return $this->render('ICAdministrationBundle:MP:affichageDetail.html.twig', array('partie' => 'Administration', 
                                                                                          'form' => $formComposant->createView(),
                                                                                          'form1' => $formComposantFournisseur->createView(),
                                                                                          'idComposantFournisseur' => $idComposantFournisseur,
                                                                                          'composantsFournisseur' => $listComposantFournisseur));
    }
    
    public function addMatierePremiereAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $formComposant = $this->createForm(ComposantType::class);
        
        if ($formComposant->handleRequest($request)->isValid())
        {
            $data = $request->get('composant');
            
            $famille = $em->getRepository('ICAdministrationBundle:Famille')->find($data['famille']);   
            $sousFamille = $em->getRepository('ICAdministrationBundle:SousFamille')->find($data['sousFamille']);                      

            $composant = new Composant();
            
            $composant->setNom($data['nom']);
            $composant->setBoitier($data['boitier']);
            $composant->setStockMini($data['stockMini']);
            $composant->setStockInterne(0);
            $composant->setFamille($famille);
            $composant->setSousFamille($sousFamille);
            
            $em->persist($composant);
            $em->flush($composant);     
        }
        
        return $this->redirectToRoute('ic_administration_matiere_premiere');
    }

    public function updateMatierePremiereAction(request $request, $idComposant)
    {
        $em = $this->getDoctrine()->getManager();
        
        $formComposant = $this->createForm(ComposantType::class);
        
        if ($formComposant->handleRequest($request)->isValid())
        {
            $data = $request->get('composant');
            
            $composant = $em->getRepository('ICAdministrationBundle:Composant')->find($idComposant); 
            $famille = $em->getRepository('ICAdministrationBundle:Famille')->find($data['famille']);   
            $sousFamille = $em->getRepository('ICAdministrationBundle:SousFamille')->find($data['sousFamille']);
            
            $composant->setNom($data['nom']);
            $composant->setBoitier($data['boitier']);
            $composant->setStockMini($data['stockMini']);
            $composant->setStockInterne(0);
            $composant->setFamille($famille);
            $composant->setSousFamille($sousFamille);
            
            $em->persist($composant);
            $em->flush($composant);     
        }
        
        return $this->redirectToRoute('ic_administration_mp_detail', array('idComposant' => $idComposant));
    }   
    
    public function addComposantFournisseurAction(request $request, $idComposant)
    {
       $em = $this->getDoctrine()->getManager();

        $formComposantFournisseur = $this->createForm(ComposantFournisseurType::class);
        
        if ($formComposantFournisseur->handleRequest($request)->isValid())
        {
            $data = $request->get('composant_fournisseur');

            $composant = $em->getRepository('ICAdministrationBundle:Composant')->find($idComposant);   
            $fournisseur = $em->getRepository('ICAdministrationBundle:Fournisseur')->find($data['fournisseur']);
            
            $composantFournisseur = new ComposantFournisseur();
            
            $composantFournisseur->setReference($data['reference']);
            $composantFournisseur->setPrix($data['prix']);
            $composantFournisseur->setComposant($composant);
            $composantFournisseur->setFournisseur($fournisseur);
            
            $em->persist($composantFournisseur);
            $em->flush($composantFournisseur);     
        }
        
        return $this->redirectToRoute('ic_administration_mp_detail', array('idComposant' => $idComposant));
    }
    
    public function updateComposantFournisseurAction(request $request, $idComposantFournisseur)
    {
        $em = $this->getDoctrine()->getManager();
       
        $formComposantFournisseur = $this->createForm(ComposantFournisseurType::class);
        
        if ($formComposantFournisseur->handleRequest($request)->isValid())
        {
            $data = $request->get('composantFournisseurType');
              
            $fournisseur = $em->getRepository('ICAdministrationBundle:Fournisseur')->find($data['fournisseur']);
            $composantFournisseur = $em->getRepository('ICAdministrationBundle:ComposantFournisseur')->find($idComposantFournisseur);
            
            $composantFournisseur->setReference($data['reference']);
            $composantFournisseur->setPrix($data['prix']);
            $composantFournisseur->setFournisseur($fournisseur);
            
            $em->persist($composantFournisseur);
            $em->flush($composantFournisseur);     
        }
        
        return $this->redirectToRoute('ic_administration_mp_detail', array('idComposant' => $composantFournisseur->getComposant()->getId()));
    }
    
    public function deleteComposantFournisseurAction($idComposantFournisseur)
    {

        $em = $this->getDoctrine()->getManager();
        
        $composantFournisseur = $em->getRepository('ICAdministrationBundle:ComposantFournisseur')->find($idComposantFournisseur); 
        $idComposant = $composantFournisseur->getComposant()->getId();
        
        $em->remove($composantFournisseur);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_mp_detail', array('idComposant' => $idComposant));        
    }
    
    public function choixFamilleAction(request $request, $idFamille)
    {      
        $em = $this->getDoctrine()->getManager();
        $req = '';
        
        $sousFamille = $em->getRepository('ICAdministrationBundle:SousFamille')->getSousFamilleByIdFamille($idFamille);
        
        foreach ($sousFamille as $sFamille) 
        {
            $req .= '<option value="'.$sFamille->getId().'" >'.$sFamille->getNom().'</option>';
        }
        
        return new Response($req);
    }
}
