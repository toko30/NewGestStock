<?php

namespace IC\ProduitFiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use IC\ProduitFiniBundle\Form\Type\PretType;
use IC\ProduitFiniBundle\Entity\Pret;
use IC\ProduitFiniBundle\Entity\HistoPret;
use IC\ProduitFiniBundle\Entity\HistoVenteLecteur;

class PretController extends Controller
{
    public function gestionPretAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listePret = $em->getRepository('ICProduitFiniBundle:Pret')->getAllPret();

        //Listage des dernières nomenclatures
        $listLastFicheDescriptive = $this->container->get('ic_production')->listLastFicheDescriptive();

        //Création du formulaire et affichage de la vue
        $formPret = $this->createForm(PretType::class, 0, array('action' => $this->generateUrl('ic_produit_fini_add_pret'), 'data' => array('listLastFicheDescriptive' => $listLastFicheDescriptive)))->createView();       
         
        return $this->render('ICProduitFiniBundle:Pret:gestionPret.html.twig', array('partie' => 'produit_fini',
                                                                                     'formPret' => $formPret,
                                                                                     'listePret' => $listePret));
    }
    
    public function addPretAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('pret');
        
        $client = $em->getRepository('ICProduitFiniBundle:Client')->findOneBy(array('id' => $data['client']));
        $lecteur = $em->getRepository('ICProduitFiniBundle:Lecteur')->findOneBy(array('numSerie' => $data['numSerie']));
        
        if(isset($lecteur))
        {
            $versionFichedescriptive = $em->getRepository('ICProduitFiniBundle:VersionFicheDescriptive')->findOneBy(array('id' => $lecteur->getVersionFicheDescriptive()->getId()));
            $date = new \DateTime($data['dateEnvoi']);

            $pret = new Pret();
            $pret->setClient($client);
            $pret->setContact($data['contact']);
            $pret->setNumSerie($data['numSerie']);
            $pret->setVersionFicheDescriptive($versionFichedescriptive);
            $pret->setRemarque($data['remarque']);
            $pret->setDateEnvoi($date);
            $pret->setEtat(0);
            
            $em->persist($pret);
            $em->flush();            
        }
        
        return $this->redirectToRoute('ic_produit_fini_gestion_pret');
    }
    
    public function histoPretAction()
    {
        return $this->render('ICProduitFiniBundle:Pret:histoPret.html.twig', array('partie' => 'produit_fini'));
    }
    
    public function retourPretAction($idPret)
    {
        $em = $this->getDoctrine()->getManager();
        
        $pret = $em->getRepository('ICProduitFiniBundle:Pret')->findOneBy(array('id' => $idPret));
        
        $histoPret = new HistoPret();        
        $histoPret->setClient($pret->getClient());
        $histoPret->setNumSerie($pret->getNumSerie());
        $histoPret->setEtat('retourné');
        $histoPret->setDatePret($pret->getDateEnvoi());
        $histoPret->setDateRetour(new \DateTime());     
                      
        $em->persist($histoPret);
        $em->remove($pret);
        
        $em->flush();
        
        return $this->redirectToRoute('ic_produit_fini_gestion_pret');        
    }
    
    public function venduPretAction($idPret)   
    {
        $em = $this->getDoctrine()->getManager();
        
        $pret = $em->getRepository('ICProduitFiniBundle:Pret')->findOneBy(array('id' => $idPret));
        
        $histoPret = new HistoPret();        
        $histoPret->setClient($pret->getClient());
        $histoPret->setNumSerie($pret->getNumSerie());
        $histoPret->setEtat('vendu');
        $histoPret->setDatePret($pret->getDateEnvoi());
        $histoPret->setDateRetour(new \DateTime());
        
        $histoVenteLecteur = new HistoVenteLecteur();
        $histoVenteLecteur->setNumSerie($pret->getNumSerie());
        $histoVenteLecteur->setIdClient($pret->getClient()->getId());
        $histoVenteLecteur->setDateVente(new \DateTime());    
        
        $em->persist($histoVenteLecteur);        
        $em->persist($histoPret);
        $em->remove($pret);
        
        $em->flush();
        
        return $this->redirectToRoute('ic_produit_fini_gestion_pret');        
    }

    public function modifRemarqueAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $pret = $em->getRepository('ICProduitFiniBundle:Pret')->find($request->get('id'));
        $pret->setRemarque($request->get('text'));

        $em->persist($pret);
        $em->flush();

        return new Response('');
    }
}
