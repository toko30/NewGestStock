<?php

namespace IC\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function affichageAction()
    {
        return $this->render('ICTestBundle:Default:index.html.twig', array('partie' => 'test'));
    }
}
