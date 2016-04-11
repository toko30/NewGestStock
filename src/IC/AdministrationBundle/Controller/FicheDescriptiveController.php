<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\Firmware;
use IC\AdministrationBundle\Form\Type\FirmwareType;

class FicheDescriptiveController extends Controller
{
    public function affichageFicheDescriptiveAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listNomenclatures = $em->getrepository('ICAdministrationBundle:Nomenclature')->getAllFirmware();

        return $this->render('ICAdministrationBundle:ficheDescriptive:affichage.html.twig', array('partie' => 'Administration'));
    }
}
