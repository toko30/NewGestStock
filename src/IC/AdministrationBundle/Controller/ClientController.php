<?php

namespace IC\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\AdministrationBundle\Entity\Client;
use IC\AdministrationBundle\Form\Type\ClientType;

class ClientController extends Controller
{
    public function affichageClientAction($idClient)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeClient = $em->getRepository('ICAdministrationBundle:Client')->findAll();
        
        if($idClient == 0)
        {
            $client = new Client();
            $formClient = $this->createForm(ClientType::class, $client, array('action' => $this->generateUrl('ic_administration_client_add')))->createView();
        }
        else
        {
            $client = $em->getRepository('ICAdministrationBundle:Client')->find($idClient);
            $formClient = $this->createForm(ClientType::class, $client, array('action' => $this->generateUrl('ic_administration_client_update', array('idClient' => $idClient))))->createView();
        }
        
        
        
        return $this->render('ICAdministrationBundle:client:affichage.html.twig', array('partie' => 'Administration',
                                                                                                    'idClient' => $idClient,
                                                                                                    'formClient' => $formClient,
                                                                                                    'listeClient' => $listeClient));
    }

    public function addClientAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('client');

        $client = new Client();
        $client->setNom($data['nom']);
        $client->setRefCompta($data['refCompta']);
        
        $em->persist($client);
        $em->flush();
        
        return $this->redirectToRoute('ic_administration_affichage_client');
    }
        
    public function updateClientAction(request $request, $idClient)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('client');
        
        $client = $em->getRepository('ICAdministrationBundle:Client')->find($idClient);
        $client->setNom($data['nom']);
        $client->setRefCompta($data['refCompta']);
        
        $em->persist($client);
        $em->flush();        
        
        return $this->redirectToRoute('ic_administration_affichage_client');        
    }
}
