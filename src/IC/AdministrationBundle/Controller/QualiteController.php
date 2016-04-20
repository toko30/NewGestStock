<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\Etape;
use IC\AdministrationBundle\Entity\Test;
use IC\AdministrationBundle\Entity\TestNomenclature;
use IC\AdministrationBundle\Entity\EtapeNomenclature;
use IC\AdministrationBundle\Form\Type\EtapeType;
use IC\AdministrationBundle\Form\Type\TestType;

class QualiteController extends Controller
{
    public function affichageNomenclatureQualiteAction($allVersion)
    {   
        $em = $this->getDoctrine()->getManager();

        $listeNomenclatures = $em->getRepository('ICAdministrationBundle:VersionNomenclature')->getLastVersionNomenclature($allVersion);
        
        return $this->render('ICAdministrationBundle:qualite:affichageNomenclature.html.twig', array('partie' => 'Administration',
                                                                                                     'listeNomenclatures' => $listeNomenclatures,
                                                                                                     'allVersion' => $allVersion));
    }
    
    public function affichageGestionNomenclatureQualiteAction($idVersion)
    {
        $em = $this->getDoctrine()->getManager();
        $listeEtapeUsed = '';
        
        $versionNomenclature = $em->getRepository('ICAdministrationBundle:VersionNomenclature')->getEtapeNomenclature($idVersion);

        if(!empty($versionNomenclature[0]->getEtapeNomenclature()))
        {
            foreach ($versionNomenclature[0]->getEtapeNomenclature() as $etape) 
            {
                $listeEtapeUsed[] = $etape->getIdEtape();
            }
        }

        $listeNewEtape = $em->getRepository('ICAdministrationBundle:Etape')->getEtapeNotUsed($listeEtapeUsed);
        
        return $this->render('ICAdministrationBundle:qualite:affichageGestionNomenclature.html.twig', array('partie' => 'Administration',
                                                                                                            'versionNomenclature' => $versionNomenclature,
                                                                                                            'listeNewEtape' => $listeNewEtape));
    }
    
    public function affichageGestionTestAction($idEtapeNomenclature, $idEtape)
    {
        $em = $this->getDoctrine()->getManager();
                
        $listeTestChecked = $em->getRepository('ICAdministrationBundle:TestNomenclature')->findBy(array('idEtapeNomenclature' => $idEtapeNomenclature));
        $etape = $em->getRepository('ICAdministrationBundle:Etape')->getTestByEtape($idEtape);
        
        return $this->render('ICAdministrationBundle:qualite:gestionTest.html.twig', array('partie' => 'Administration',
                                                                                           'etape' => $etape,
                                                                                           'listeTestChecked' => $listeTestChecked,
                                                                                           'idEtapeNomenclature' => $idEtapeNomenclature));        
    }
    
    public function addEtapeGestionNomenclatureQualiteAction(request $request, $idVersion)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('etape');
        
        $etapeNomenclature = new EtapeNomenclature();
        $nbEtape = $em->getRepository('ICAdministrationBundle:EtapeNomenclature')->getNbEtape($idVersion);
        $versionNomenclature = $em->getRepository('ICAdministrationBundle:VersionNomenclature')->find($idVersion);
        $etape = $em->getRepository('ICAdministrationBundle:Etape')->getTestByEtape($data);      
        
        $etapeNomenclature->setVersionNomenclature($versionNomenclature);
        $etapeNomenclature->setEtape($etape[0]);
        $etapeNomenclature->setOrdre($nbEtape[0]['nbEtape'] + 1);
        
        $em->persist($etapeNomenclature);
        $em->flush();
        
        $listeTest = $em->getRepository('ICAdministrationBundle:Test')->findBy(array('idEtape' => $data));   
        $listeTestChecked = null;
        
        if($data == -1 || $data == -2)
            return $this->redirectToRoute('ic_administration_affichage_gestion_nomenclature_qualite', array('idVersion' => $versionNomenclature->getVersion()));
        else
            return $this->redirectToRoute('ic_administration_affichage_gestion_nomenclature_qualite_test', array('idEtapeNomenclature' => $etapeNomenclature->getId(), 'idEtape' => $data));  
    }
    
    public function deleteEtapeGestionNomenclatureQualiteAction($idEtapeNomenclature)
    {
        $em = $this->getDoctrine()->getManager();
        
        $etape = $em->getRepository('ICAdministrationBundle:EtapeNomenclature')->getAllInfoEtape($idEtapeNomenclature);   

        $idVersion = $etape[0]->getIdVersionNomenclature();
        
        if(!empty($etape[0]->getTestNomenclature()))
        {
            foreach ($etape[0]->getTestNomenclature() as $testNomenclature) 
            {
                $em->remove($testNomenclature);
            }            
        }

        $em->remove($etape[0]);
        $em->flush();
        
         return $this->redirectToRoute('ic_administration_affichage_gestion_nomenclature_qualite', array('idVersion' => $idVersion));
    }
    
    public function updateOrderEtapeGestionNomenclatureQualiteAction($plusOuMoins, $idEtapeNomenclature)
    {
        $em = $this->getDoctrine()->getManager();
        
        $etapeNomenclature = $em->getRepository('ICAdministrationBundle:EtapeNomenclature')->find($idEtapeNomenclature);
        
        if($plusOuMoins == 0)
        {
            $etapeNomenclaturePlusOuMoins = $em->getRepository('ICAdministrationBundle:EtapeNomenclature')->getEtapeNomenclatureOrder($etapeNomenclature->getIdVersionNomenclature(), $etapeNomenclature->getOrdre() + 1);
            
            $etapeNomenclature->setOrdre($etapeNomenclature->getOrdre() + 1);
            $etapeNomenclaturePlusOuMoins[0]->setOrdre($etapeNomenclaturePlusOuMoins[0]->getOrdre() - 1);
            
        }
        else
        {
            $etapeNomenclaturePlusOuMoins = $em->getRepository('ICAdministrationBundle:EtapeNomenclature')->getEtapeNomenclatureOrder($etapeNomenclature->getIdVersionNomenclature(), $etapeNomenclature->getOrdre() - 1);

            $etapeNomenclature->setOrdre($etapeNomenclature->getOrdre() - 1);
            $etapeNomenclaturePlusOuMoins[0]->setOrdre($etapeNomenclaturePlusOuMoins[0]->getOrdre() + 1);
        }
        
        $em->persist($etapeNomenclature);
        $em->persist($etapeNomenclaturePlusOuMoins[0]);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_nomenclature_qualite', array('idVersion' => $etapeNomenclature->getIdVersionNomenclature()));        
    }
    
    public function updateTestGestionNomenclatureQualiteAction(request $request, $idEtapeNomenclature)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('test');
        
        $etapeNomenclature = $em->getRepository('ICAdministrationBundle:EtapeNomenclature')->find($idEtapeNomenclature);
        $removeTestNomenclature = $em->getRepository('ICAdministrationBundle:TestNomenclature')->findBy(array('idEtapeNomenclature' => $idEtapeNomenclature));
        
        foreach ($removeTestNomenclature as $remove) 
            $em->remove($remove);
            
        $em->flush();
        if(!empty($data))
        {
            foreach ($data as $test) 
            {
                $testNomenclature = new TestNomenclature();
                
                $test = $em->getRepository('ICAdministrationBundle:Test')->find($test);
                
                $testNomenclature->setEtapeNomenclature($etapeNomenclature);
                $testNomenclature->setTest($test);
                
                $em->persist($testNomenclature);
            }
            
            $em->flush();
        }
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_nomenclature_qualite', array('idVersion' => $etapeNomenclature->getIdVersionNomenclature()));
    }
    
    public function affichageGestionQualiteAction($idEtape, $idTest)
    {   
        $em = $this->getDoctrine()->getManager();
        $listeEtapes = $em->getRepository('ICAdministrationBundle:Etape')->getAllEtapeAndTest();
        
        if($idEtape != 0 && $idTest == 0)
        {
            $etape = $em->getRepository('ICAdministrationBundle:Etape')->find($idEtape);
            $formEtape = $this->createForm(EtapeType::class, $etape, array('action' => $this->generateUrl('ic_administration_affichage_gestion_qualite_update_etape', array('idEtape' => $idEtape))))->createView(); 
        }
        else
        {
            $etape = new Etape();
            $formEtape = $this->createForm(EtapeType::class, $etape, array('action' => $this->generateUrl('ic_administration_affichage_gestion_qualite_add_etape')))->createView();            
        }
        
        if ($idTest !=0)
        {
            $test = $em->getRepository('ICAdministrationBundle:Test')->find($idTest);
            $formTest = $this->createForm(TestType::class, $test, array('action' => $this->generateUrl('ic_administration_affichage_gestion_qualite_update_test', array('idTest' => $idTest))))->createView();
        }
        else
        {
            foreach ($listeEtapes as $etape) 
            {
                $test = new Test();
                $url = $this->generateUrl('ic_administration_affichage_gestion_qualite_add_test', array('idEtape' => $etape->getId()));
                $formTest[] = $this->createForm(TestType::class, $test, array('action' => $url))->createView(); 
            }
        }
        
        return $this->render('ICAdministrationBundle:qualite:affichageGestionEtape.html.twig', array('partie' => 'Administration',
                                                                                                     'formEtape' => $formEtape,
                                                                                                     'formTest' => $formTest,
                                                                                                     'idEtape' => $idEtape,
                                                                                                     'idTest' => $idTest,
                                                                                                     'listeEtapes' => $listeEtapes));
    }
    
    public function addEtapeGestionQualiteAction(request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $etape = new Etape();
        $data = $request->get('etape');
        
        $etape->setNom($data['nom']);
        $em->persist($etape);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_qualite');
    }
    
    public function updateEtapeGestionQualiteAction(request $request, $idEtape)
    {
        $em = $this->getDoctrine()->getManager();
        $etape = $em->getRepository('ICAdministrationBundle:Etape')->find($idEtape);
        $data = $request->get('etape');
        
        $etape->setNom($data['nom']);
        $em->persist($etape);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_qualite');
    }

    public function addTestGestionQualiteAction(request $request, $idEtape)
    {   
        $em = $this->getDoctrine()->getManager();
        
        $test = new Test();
        $etape = $em->getRepository('ICAdministrationBundle:Etape')->find($idEtape);
        
        $data = $request->get('test');

        $test->setNom($data['nom']);
        $test->setEtape($etape);
        
        $em->persist($test);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_qualite');
    }
    
    public function updateTestGestionQualiteAction(request $request, $idTest)
    {       
        
        $em = $this->getDoctrine()->getManager();
        
        $test = $em->getRepository('ICAdministrationBundle:Test')->find($idTest);
        $etape = $em->getRepository('ICAdministrationBundle:Etape')->find($test->getEtape()->getId());

        $data = $request->get('test');
        
        $test->setNom($data['nom']);
        $test->setEtape($etape);
        
        $em->persist($test);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_gestion_qualite');
    }
}
