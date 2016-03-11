<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FirmwareController extends Controller
{
    public function affichageFirmwareAction()
    {  
        return $this->render('ICAdministrationBundle:firmware:affichage.html.twig', array('partie' => 'Administration'));
    }
}
