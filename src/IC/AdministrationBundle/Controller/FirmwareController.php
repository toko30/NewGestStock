<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\Firmware;
use IC\AdministrationBundle\Form\Type\FirmwareType;

class FirmwareController extends Controller
{
    public function affichageFirmwareAction($idFirmware)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listNomenclatures = $em->getrepository('ICAdministrationBundle:Nomenclature')->getAllFirmware();
        $nbNomenclature = count($listNomenclatures);
        
        
        if($idFirmware == 0)
        {
            $url = $this->generateUrl('ic_administration_add_firmware');
            $firmware = new Firmware();
            
            if($listNomenclatures == null)
                $formFirmware[] = null;
            else
            {
                foreach($listNomenclatures as $nomenclature)
                    $formFirmware[] = $this->createForm(FirmwareType::class, $firmware, array('action'=> $url))->createView();                         
            }
        }
        else
        {
            $url = $this->generateUrl('ic_administration_update_firmware', array('idFirmware' => $idFirmware));
            $firmware = $em->getRepository('ICAdministrationBundle:Firmware')->find($idFirmware);
            
            $formFirmware = $this->createForm(FirmwareType::class, $firmware, array('action'=> $url))->createView(); 
        }

        return $this->render('ICAdministrationBundle:firmware:affichage.html.twig', array('partie' => 'Administration',
                                                                                          'form' => $formFirmware,
                                                                                          'idFirmware' => $idFirmware,
                                                                                          'nomenclatures' => $listNomenclatures));
    }
    
    public function addFirmwareAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('firmware');
        
        $firmware = new Firmware();
        $nomenclature = $em->getRepository('ICAdministrationBundle:Nomenclature')->find($data['idNomenclature']);
       
        $firmware->setNom($data['nom']);
        $firmware->setNumSerie($data['numSerie']);
        $firmware->setCommentaire($data['commentaire']);
        $firmware->setNomenclature($nomenclature);
        
        $em->persist($firmware);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_firmware');
    }
    
    public function updateFirmwareAction(request $request, $idFirmware)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('firmware');
        
        $firmware = $em->getRepository('ICAdministrationBundle:Firmware')->find($idFirmware);
        $nomenclature = $em->getRepository('ICAdministrationBundle:Nomenclature')->find($data['idNomenclature']);
       
        $firmware->setNom($data['nom']);
        $firmware->setNumSerie($data['numSerie']);
        $firmware->setCommentaire($data['commentaire']);
        $firmware->setNomenclature($nomenclature);
        
        $em->persist($firmware);
        $em->flush();
                
        return $this->redirectToRoute('ic_administration_affichage_firmware');
    }
}
