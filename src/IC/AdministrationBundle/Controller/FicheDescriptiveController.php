<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\FicheDescriptive;
use IC\AdministrationBundle\Entity\FicheDescriptiveOption;
use IC\AdministrationBundle\Entity\OptionFicheDescriptive;
use IC\AdministrationBundle\Entity\VersionFicheDescriptive;
use IC\AdministrationBundle\Entity\NomenclatureFicheDescriptive;
use IC\AdministrationBundle\Form\Type\FicheDescriptiveType;
use IC\AdministrationBundle\Form\Type\FicheDescriptiveOptionType;
use IC\AdministrationBundle\Form\Type\VersionFicheDescriptiveType;

class FicheDescriptiveController extends Controller
{
    public function affichageFicheDescriptiveAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeFicheDescriptive = $em->getRepository('ICAdministrationBundle:FicheDescriptive')->findAll();
        
        $ficheDescriptive = new FicheDescriptive();
        $form = $this->createForm(FicheDescriptiveType::class, $ficheDescriptive, array('action' => $this->generateUrl('ic_administration_fiche_descriptive_add')))->createView();

        
        return $this->render('ICAdministrationBundle:ficheDescriptive:affichage.html.twig', array('partie' => 'Administration',
                                                                                                  'form' => $form,
                                                                                                  'listeFicheDescriptive' => $listeFicheDescriptive));
    }
    
    public function affichageDetailFicheDescriptiveAction($idFiche, $idFicheOption)
    {
        $em = $this->getDoctrine()->getManager();
        
        $ficheDescriptive = $em->getRepository('ICAdministrationBundle:FicheDescriptive')->find($idFiche);
        $listeFicheDescriptiveOption = $em->getRepository('ICAdministrationBundle:FicheDescriptiveOption')->getAllOptionAndVersion($idFiche);
        $nomFiche = $ficheDescriptive->getNom();
        
        $formFicheDescriptive = $this->createForm(FicheDescriptiveType::class, $ficheDescriptive, array('action' => $this->generateUrl('ic_administration_fiche_descriptive_update', array('idFiche' => $idFiche))))->createView();
        
        if($idFicheOption == 0)
        {
            $ficheDescriptiveOption = new FicheDescriptiveOption();
            $formFicheDescriptiveOptionType = $this->createForm(FicheDescriptiveOptionType::class, $ficheDescriptiveOption, array('action' => $this->generateUrl('ic_administration_fiche_descriptive_option_add', array('idFiche' => $idFiche))))->createView();
        }
        else
        {
            $ficheDescriptiveOption = $em->getRepository('ICAdministrationBundle:FicheDescriptiveOption')->find($idFicheOption);
            $formFicheDescriptiveOptionType = $this->createForm(FicheDescriptiveOptionType::class, $ficheDescriptiveOption, array('action' => $this->generateUrl('ic_administration_fiche_descriptive_option_update', array('idFicheOption' => $idFicheOption))))->createView();
        }
        
        return $this->render('ICAdministrationBundle:ficheDescriptive:affichageDetail.html.twig', array('partie' => 'Administration',
                                                                                                        'nomFiche' => $nomFiche,
                                                                                                        'idFiche' => $idFiche,
                                                                                                        'idFicheOption' => $idFicheOption,
                                                                                                        'formFicheDescriptive' => $formFicheDescriptive,
                                                                                                        'formFicheDescriptiveOptionType' => $formFicheDescriptiveOptionType,
                                                                                                        'listeFicheDescriptiveOption' => $listeFicheDescriptiveOption));        
    }
    
    public function affichageFicheDescriptiveGestionNomenclatureAction($idVersionFicheDescriptive)
    {        
        $em = $this->getDoctrine()->getManager();
        
        $listNomenclature = $em->getRepository('ICAdministrationBundle:Nomenclature')->getAllNomenclature();
        $listNomenclatureFichedescriptive = $em->getRepository('ICAdministrationBundle:NomenclatureFicheDescriptive')->findAll($idVersionFicheDescriptive);

        return $this->render('ICAdministrationBundle:ficheDescriptive:gestionNomenclature.html.twig', array('partie' => 'Administration',
                                                                                                            'idVersionFicheDescriptive' => $idVersionFicheDescriptive,
                                                                                                            'listNomenclature' => $listNomenclature,
                                                                                                            'listNomenclatureFichedescriptive' => $listNomenclatureFichedescriptive));         
    }
     
    public function updateFicheDescriptiveGestionNomenclatureAction(request $request, $idVersionFicheDescriptive)
    {
        $em = $this->getDoctrine()->getManager();
        $versionFicheDescriptive = $em->getRepository('ICAdministrationBundle:VersionFicheDescriptive')->find($idVersionFicheDescriptive);
        $listnomenclatureFichedescriptive = $em->getRepository('ICAdministrationBundle:NomenclatureFicheDescriptive')->findBy(array('idVersionFicheDescriptive' => $idVersionFicheDescriptive));
        
        foreach ($listnomenclatureFichedescriptive as $NomenclatureFichedescriptive) 
        {
            $em->remove($NomenclatureFichedescriptive);
        }
        
        for($i = 0; ; )
        {
           $data = $request->get('versionNomenclature'.$i);
           if($data != 0)
           {
               $versionNomenclature = $em->getRepository('ICAdministrationBundle:VersionNomenclature')->find($data);
               $nomenclatureFichedescriptive = new NomenclatureFicheDescriptive();
               
               $nomenclatureFichedescriptive->setVersionNomenclature($versionNomenclature);
               $nomenclatureFichedescriptive->setVersionficheDescriptive($versionFicheDescriptive);
               
               $em->persist($nomenclatureFichedescriptive);
           }
           
           if($request->get('versionNomenclature'.++$i) == null)
            break;
        }
        
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_fiche_descriptive_detail', array('idFiche' => $versionFicheDescriptive->getficheDescriptiveOption()->getIdFicheDescriptive()));
    }
     
    public function addFicheDescriptiveAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ficheDescriptive = new FicheDescriptive();
        
        $data = $request->get('fiche_descriptive');
        
        $ficheDescriptive->setNom($data['nom']);
        $ficheDescriptive->setDesignation($data['designation']);
        $ficheDescriptive->setFrequence($data['frequence']);
        $ficheDescriptive->setPetite($data['petite']);
        $ficheDescriptive->setMoyenne($data['moyenne']);
        $ficheDescriptive->setGrande($data['grande']);
        
        $em->persist($ficheDescriptive);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_fiche_descriptive_detail', array('idFiche' => $ficheDescriptive->getId()));
    }
    
    public function updateFicheDescriptiveAction(request $request, $idFiche)
    {
        $em = $this->getDoctrine()->getManager();
        $ficheDescriptive = $em->getRepository('ICAdministrationBundle:FicheDescriptive')->find($idFiche);
        
        $data = $request->get('fiche_descriptive');
        
        $ficheDescriptive->setNom($data['nom']);
        $ficheDescriptive->setDesignation($data['designation']);
        $ficheDescriptive->setFrequence($data['frequence']);
        $ficheDescriptive->setPetite($data['petite']);
        $ficheDescriptive->setMoyenne($data['moyenne']);
        $ficheDescriptive->setGrande($data['grande']);
        
        $em->persist($ficheDescriptive);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_fiche_descriptive_detail', array('idFiche' => $ficheDescriptive->getId()));
    }
    
    public function addFicheDescriptiveOptionAction(request $request, $idFiche)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('fiche_descriptive_option');
        array_multisort($data['optionFicheDescriptive']);
        
        $ficheDescriptive = $em->getRepository('ICAdministrationBundle:FicheDescriptive')->find($idFiche);
        $type = $em->getRepository('ICAdministrationBundle:SousTypeLecteur')->find($data['type']);
        $ficheDescriptiveOption = new FicheDescriptiveOption();
        
        $ficheDescriptiveOption->setDesignation($data['designation']);
        $ficheDescriptiveOption->setSousTypeLecteur($type);
        $ficheDescriptiveOption->setFicheDescriptive($ficheDescriptive);
        
        $em->persist($ficheDescriptiveOption);
        $em->flush();
        
        foreach ($data['optionFicheDescriptive'] as $optionFicheDescriptive) 
        {
            $optionProduitFini = $em->getRepository('ICAdministrationBundle:OptionProduitFini')->find($optionFicheDescriptive['optionProduitFini']);
            $optionFicheDescriptive = new OptionFicheDescriptive();
            
            $optionFicheDescriptive->setFicheDescriptiveOption($ficheDescriptiveOption);
            $optionFicheDescriptive->setOptionProduitFini($optionProduitFini);
            
            $em->persist($optionFicheDescriptive);
        }
        
        $versionFicheDescriptive = new VersionFicheDescriptive();
        $versionFicheDescriptive->setFicheDescriptiveOption($ficheDescriptiveOption);
        $versionFicheDescriptive->setVersion(1);
        
        $em->persist($versionFicheDescriptive);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_fiche_descriptive_detail', array('idFiche' => $ficheDescriptive->getId()));        
    }
    
    public function updateFicheDescriptiveOptionAction(request $request, $idFicheOption)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('fiche_descriptive_option');
        array_multisort($data['optionFicheDescriptive']);
        
        
        $type = $em->getRepository('ICAdministrationBundle:SousTypeLecteur')->find($data['type']);
        $ficheDescriptiveOption = $em->getRepository('ICAdministrationBundle:FicheDescriptiveOption')->find($idFicheOption);
        $ficheDescriptive = $em->getRepository('ICAdministrationBundle:FicheDescriptive')->find($ficheDescriptiveOption->getIdFicheDescriptive());
        
        $ficheDescriptiveOption->setDesignation($data['designation']);
        $ficheDescriptiveOption->setSousTypeLecteur($type);
        $ficheDescriptiveOption->setFicheDescriptive($ficheDescriptive);
        
        $em->persist($ficheDescriptiveOption);
        $em->flush();
        
        $listOptionfichedescriptive = $em->getRepository('ICAdministrationBundle:OptionFicheDescriptive')->findAll($ficheDescriptiveOption->getId());
        
        foreach ($listOptionfichedescriptive as $optionfichedescriptiveDel)
        {
            $em->remove($optionfichedescriptiveDel);
        }
        
        foreach ($data['optionFicheDescriptive'] as $optionFicheDescriptive) 
        {
            $optionProduitFini = $em->getRepository('ICAdministrationBundle:OptionProduitFini')->find($optionFicheDescriptive['optionProduitFini']);
            $optionFicheDescriptive = new OptionFicheDescriptive();
            
            $optionFicheDescriptive->setFicheDescriptiveOption($ficheDescriptiveOption);
            $optionFicheDescriptive->setOptionProduitFini($optionProduitFini);
            
            $em->persist($optionFicheDescriptive);
        }
                
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_fiche_descriptive_detail', array('idFiche' => $ficheDescriptive->getId()));         
    }
}
