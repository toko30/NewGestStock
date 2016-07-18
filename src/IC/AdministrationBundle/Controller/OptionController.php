<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\SousFamille;
use IC\AdministrationBundle\Entity\SousTypeBadge;
use IC\AdministrationBundle\Entity\SousTypeLecteur;
use IC\AdministrationBundle\Entity\TypeAutre;
use IC\AdministrationBundle\Entity\OptionProduitFini;

class OptionController extends Controller
{
    public function sousFamilleAction($idSousFamille)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listFamille = $em->getRepository('ICAdministrationBundle:Famille')->findAll();
        $listSousFamille = $em->getRepository('ICAdministrationBundle:SousFamille')->findAll();
        
        return $this->render('ICAdministrationBundle:option:sousFamille.html.twig', array('partie' => 'Administration', 
                                                                                          'idSousFamille' =>$idSousFamille, 
                                                                                          'listFamille' => $listFamille, 
                                                                                          'listSousFamille' => $listSousFamille));
    }
    
    public function addsousFamilleAction(request $request, $idFamille)
    {
        $em = $this->getDoctrine()->getManager();
        
        $famille = $em->getRepository('ICAdministrationBundle:Famille')->find($idFamille);
        
        $sousFamille = new SousFamille();      
        $sousFamille->setFamille($famille);
        $sousFamille->setNom($request->get('nom'));
        
        $em->persist($sousFamille);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_sous_famille');
    }
    
    public function updatesousFamilleAction(request $request, $idSousFamille)
    {
        $em = $this->getDoctrine()->getManager();
        
        $sousFamille = $em->getRepository('ICAdministrationBundle:SousFamille')->find($idSousFamille);

        $sousFamille->setNom($request->get('nom'));
        
        $em->persist($sousFamille);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_sous_famille');        
    }
    
    public function typeBadgeAction($idTypeBadge)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeTypeBadge = $em->getRepository('ICAdministrationBundle:SousTypeBadge')->findAll();
        
        return $this->render('ICAdministrationBundle:option:typeBadge.html.twig', array('partie' => 'Administration',
                                                                                        'listeTypeBadge' => $listeTypeBadge,
                                                                                        'idTypeBadge' => $idTypeBadge));
    }
    
    public function addTypeBadgeAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typebadge = new SousTypebadge();
        $typebadge->setNom($request->get('nom'));
        
        $em->persist($typebadge);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_type_badge'); 
    }
    
    public function updateTypeBadgeAction(request $request, $idTypeBadge)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeBadge = $em->getRepository('ICAdministrationBundle:SousTypeBadge')->find($idTypeBadge);
        $typeBadge->setNom($request->get('nom'));
        
        $em->persist($typeBadge);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_type_badge'); 
    }
    
    public function typeLecteurAction($idTypeLecteur)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeTypeLecteur = $em->getRepository('ICAdministrationBundle:SousTypeLecteur')->findAll();
        
        return $this->render('ICAdministrationBundle:option:typeLecteur.html.twig', array('partie' => 'Administration',
                                                                                          'listeTypeLecteur' => $listeTypeLecteur,
                                                                                          'idTypeLecteur' => $idTypeLecteur));
    }
    
    public function addTypeLecteurAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeLecteur = new SousTypeLecteur();
        $typeLecteur->setNom($request->get('nom'));
        
        $em->persist($typeLecteur);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_type_lecteur'); 
    }
    
    public function updateTypeLecteurAction(request $request, $idTypeLecteur)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeLecteur = $em->getRepository('ICAdministrationBundle:SousTypeLecteur')->find($idTypeLecteur);
        $typeLecteur->setNom($request->get('nom'));
        
        $em->persist($typeLecteur);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_type_lecteur'); 
    }
        
    public function typeAutreAction($idTypeAutre)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeTypeAutre = $em->getRepository('ICAdministrationBundle:TypeAutre')->findAll();      
        
        return $this->render('ICAdministrationBundle:option:typeAutre.html.twig', array('partie' => 'Administration',
                                                                                        'listeTypeAutre' => $listeTypeAutre,
                                                                                        'idTypeAutre' => $idTypeAutre));
    }
    
    public function addTypeAutreAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeAutre = new TypeAutre();
        $typeAutre->setNom($request->get('nom'));
        
        $em->persist($typeAutre);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_type_autre'); 
    }
    
    public function updateTypeAutreAction(request $request, $idTypeAutre)
    {
        $em = $this->getDoctrine()->getManager();
        
        $typeAutre = $em->getRepository('ICAdministrationBundle:TypeAutre')->find($idTypeAutre);
        $typeAutre->setNom($request->get('nom'));
        
        $em->persist($typeAutre);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_type_autre'); 
    }
    
    public function optionFicheDescriptiveAction($idOption)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeOption = $em->getRepository('ICAdministrationBundle:OptionProduitFini')->findAll();      
        
        return $this->render('ICAdministrationBundle:option:optionFicheDescriptive.html.twig', array('partie' => 'Administration',
                                                                                        'listeOption' => $listeOption,
                                                                                        'idOption' => $idOption));
    }
    
    public function addOptionFicheDescriptiveAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $option = new OptionProduitFini();
        $option->setNom($request->get('nom'));
        $option->setAbreviation($request->get('abreviation'));
        
        $em->persist($option);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_option_fiche_descriptive'); 
    }
    
    public function updateOptionFicheDescriptiveAction(request $request, $idOption)
    {
        $em = $this->getDoctrine()->getManager();
        
        $option = $em->getRepository('ICAdministrationBundle:OptionProduitFini')->find($idOption);
        $option->setNom($request->get('nom'));
        $option->setAbreviation($request->get('abreviation'));
        
        $em->persist($option);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_option_fiche_descriptive'); 
    }    
}
