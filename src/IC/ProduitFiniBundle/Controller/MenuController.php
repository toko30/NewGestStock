<?php

namespace IC\ProduitFiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction($url)
    {     
        //génération du template Twig
        return $this->render('ICProduitFiniBundle:MenuVertical:menu.html.twig', array('url' => $url));
    }
}
