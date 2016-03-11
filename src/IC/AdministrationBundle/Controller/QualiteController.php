<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QualiteController extends Controller
{
    public function affichageQualiteAction()
    {       
        return $this->render('ICAdministrationBundle:qualite:affichage.html.twig', array('partie' => 'Administration'));
    }
}
