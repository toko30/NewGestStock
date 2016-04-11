<?php

namespace IC\ProduitFiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitFiniController extends Controller
{
    public function affichageAction()
    {
        return $this->render('ICProduitFiniBundle:Default:index.html.twig', array('partie' => 'produit_fini'));
    }
}
