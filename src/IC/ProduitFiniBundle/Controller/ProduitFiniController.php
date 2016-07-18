<?php

namespace IC\ProduitFiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use IC\ProduitFiniBundle\Entity\HistoVenteLecteur;
use IC\ProduitFiniBundle\Entity\HistoVenteAutreProduitFini;
use IC\ProduitFiniBundle\Entity\HistoVenteLecteurAutre;
use IC\ProduitFiniBundle\Entity\HistoVenteBadge;

class ProduitFiniController extends Controller
{
    public function venteAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listeClient = $em->getRepository('ICProduitFiniBundle:Client')->getAllClient();        
        
        return $this->render('ICProduitFiniBundle:ProduitFini:vente.html.twig', array('partie' => 'produit_fini',
                                                                                      'listeClient' => $listeClient));
    }
    
    public function venteBadgeAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeClient = $em->getRepository('ICProduitFiniBundle:Client')->getAllClient();
        
        return $this->render('ICProduitFiniBundle:ProduitFini:venteBadge.html.twig', array('partie' => 'produit_fini',
                                                                                           'listeClient' => $listeClient));        
    }
    
    public function rechercheHistoProduitFiniAction()
    {

        return $this->render('ICProduitFiniBundle:ProduitFini:rechercheHistoProduit.html.twig', array('partie' => 'produit_fini'));
    }

    public function histoProduitFiniAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $numSerie = $request->get('numSerie');
        $lecteur = $em->getRepository('ICProduitFiniBundle:Lecteur')->findOneBy(array('numSerie' => $numSerie));
        $lecteurAutre = $em->getRepository('ICProduitFiniBundle:LecteurAutre')->findOneBy(array('numSerie' => $numSerie));
        $autre = $em->getRepository('ICProduitFiniBundle:ProduitFiniAutre')->findOneBy(array('numSerie' => $numSerie));
        $infoNomenclature = null;
        $histoReprise = null;
        
        if(!empty($lecteur))
        {
            $ficheDescriptive = $em->getRepository('ICProduitFiniBundle:VersionFicheDescriptive')->getNomLecteurById($lecteur->getIdLecteur());
            $nomenclatures = $em->getRepository('ICProduitFiniBundle:NomenclatureLecteur')->getNomenclature($lecteur->getId());

            foreach ($nomenclatures as $key => $nomenclature) 
            {
                $histoReprise = $em->getRepository('ICProduitFiniBundle:HistoReprise')->getReprise($nomenclature->getNumSerie());

                $infoNomenclature[$key]['nom'] = $nomenclature->getVersionNomenclature()->getNomenclature()->getNom().'-V'.$nomenclature->getVersionNomenclature()->getVersion();
                $infoNomenclature[$key]['firmware'] = $nomenclature->getFirmware()->getNom();
                $infoNomenclature[$key]['dateTest'] = $nomenclature->getDateTest();
                $infoNomenclature[$key]['dateProd'] = $nomenclature->getDateProd();

                if(empty($histoReprise))
                {
                    $infoNomenclature[$key]['reprise'] = 0;
                }
                else
                {
                    $infoNomenclature[$key]['reprise'] = $histoReprise;
                }
            }

            $vente = $em->getRepository('ICProduitFiniBundle:HistoVenteLecteur')->findOneBy(array('numSerie' => $numSerie));
            $pret = $em->getRepository('ICProduitFiniBundle:Pret')->findBy(array('numSerie' => $numSerie));
            $histoPret = $em->getRepository('ICProduitFiniBundle:HistoPret')->gethistoPretLecteur($numSerie);

            //$sav = $em->getRepository('ICProduitFiniBundle:Lecteur')->findOneBy(array('numSerie' => $numSerie));
            //$carteSavHs = $em->getRepository('ICProduitFiniBundle:Lecteur')->findOneBy(array('numSerie' => $numSerie));

            return $this->render('ICProduitFiniBundle:ProduitFini:histoProduitLecteur.html.twig', array('partie' => 'produit_fini',
                                                                                                        'ficheDescriptive' => $ficheDescriptive,
                                                                                                        'nomenclatures' => $infoNomenclature,
                                                                                                        'histoReprise' => $histoReprise,
                                                                                                        'vente' => $vente,
                                                                                                        'histoPret' => $histoPret,
                                                                                                        'lecteur' => $lecteur,
                                                                                                        'pret' => $pret));
        }
        elseif(!empty($lecteurAutre))
        {
            return $this->render('ICProduitFiniBundle:ProduitFini:histoProduitLecteurAutre.html.twig', array('partie' => 'produit_fini'));
        }
        elseif(!empty($autre))
        {
            return $this->render('ICProduitFiniBundle:ProduitFini:histoProduitAutre.html.twig', array('partie' => 'produit_fini'));
        }
        else
            return $this->redirectToRoute('ic_produit_fini_recherche_histo_produit_fini');
    }

    public function ajoutListeVenteAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $venduLecteur = $em->getRepository('ICProduitFiniBundle:HistoVenteLecteur')->findOneBy(array('numSerie' => $request->get('numSerie')));
        $venduLecteurAutre = $em->getRepository('ICProduitFiniBundle:HistoVenteLecteurAutre')->findOneBy(array('numSerie' => $request->get('numSerie')));
        $venduAutre = $em->getRepository('ICProduitFiniBundle:HistoVenteAutreProduitFini')->findOneBy(array('numSerie' => $request->get('numSerie')));
        
        if(!isset($venduLecteur) && !isset($venduLecteurAutre) && !isset($venduAutre))
        {
            $lecteur = $em->getRepository('ICProduitFiniBundle:Lecteur')->findOneBy(array('numSerie' => $request->get('numSerie')));
            $lecteurAutre = $em->getRepository('ICProduitFiniBundle:LecteurAutre')->findOneBy(array('numSerie' => $request->get('numSerie')));
            $autrePf = $em->getRepository('ICProduitFiniBundle:ProduitFiniAutre')->findOneBy(array('numSerie' => $request->get('numSerie')));
            
            if(isset($lecteur))
            {   
                $option = '';
                foreach ($lecteur->getVersionFicheDescriptive()->getFicheDescriptiveOption()->getOptionFicheDescriptive() as $value) 
                {
                    $option .= $value->getOptionProduitFini()->getAbreviation().'-';
                }
                $option = trim($option, '-');
                        
                $nomFiche = $lecteur->getVersionFicheDescriptive()->getFicheDescriptiveOption()->getFicheDescriptive()->getNom().'-'.$option.'-V'.$lecteur->getVersionFicheDescriptive()->getVersion();           
            }
            elseif(isset($lecteurAutre))
            {
                $nomFiche = $lecteurAutre->getTypeLecteurAutre()->getReference();
            }
            elseif(isset($autrePf))
            {
                $nomFiche = $autrePf->getAutre()->getDesignation();
            }
            else
                $nomFiche = -2;            
        }
        else
            $nomFiche = -1;
            
        return new Response($nomFiche);
    }
    
    public function validationVenteAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeNumSerie = json_decode($request->get('listNumSerie'));
        $listeIdClient = json_decode($request->get('listIdClient'));

        foreach ($listeNumSerie as $key => $numSerie)
        {
            $lecteur = $em->getRepository('ICProduitFiniBundle:Lecteur')->findOneBy(array('numSerie' => $numSerie));
            $lecteurAutre = $em->getRepository('ICProduitFiniBundle:LecteurAutre')->findOneBy(array('numSerie' => $numSerie));
            $autre = $em->getRepository('ICProduitFiniBundle:ProduitFiniAutre')->findOneBy(array('numSerie' => $numSerie));
            $client = $em->getRepository('ICProduitFiniBundle:Client')->find($listeIdClient[$key]);

            if (isset($lecteur))
            {
                $histoVenteLecteur = new HistoVenteLecteur();
                $histoVenteLecteur->setNumSerie($numSerie);
                $histoVenteLecteur->setClient($client);
                $histoVenteLecteur->setDateVente(new \DateTime()); 
                $lecteur->setVendu(1);

                $em->persist($lecteur);
                $em->persist($histoVenteLecteur);            
            }
            elseif (isset($lecteurAutre))
            {
                $histoVenteLecteurAutre = new HistoVenteLecteurAutre();
                $histoVenteLecteurAutre->setNumSerie($numSerie);
                $histoVenteLecteurAutre->setClient($client);
                $histoVenteLecteurAutre->setDateVente(new \DateTime());        
                $lecteurAutre->setVendu(1);
                
                $em->persist($lecteurAutre); 
                $em->persist($histoVenteLecteurAutre);             
            }
            elseif (isset($autre))
            {
                $histoVenteAutre = new HistoVenteAutreProduitFini();
                $histoVenteAutre->setNumSerie($numSerie);
                $histoVenteAutre->setClient($client);
                $histoVenteAutre->setDateVente(new \DateTime());    
                $autre->setVendu(1);

                $em->persist($autre);
                $em->persist($histoVenteAutre);                 
            }
        }
        
        $em->flush();
        
        return new Response(1);
    }
    
    public function ajoutListeVenteBadgeAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $badge = $em->getRepository('ICProduitFiniBundle:TypeBadge')->findOneBy(array('reference' => $request->get('ref')));
        
        if(isset($badge))
        {
            if($badge->getQuantite() > $request->get('quantite'))
                $retourBadge = 1;
            else
                $retourBadge = -2;
        }
        else
            $retourBadge = -1;
        
        return new Response($retourBadge);
    }
    
    public function validationVenteBadgeAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $listeRef = json_decode($request->get('listRef'));
        $listeIdClient = json_decode($request->get('listIdClient'));
        $listeQuantite = json_decode($request->get('listQuantite'));
        
        foreach ($listeRef as $key => $ref) 
        {
            $badge = $em->getRepository('ICProduitFiniBundle:TypeBadge')->findOneBy(array('reference' => $ref));
            
            $badge->setQuantite($badge->getQuantite() - $listeQuantite[$key]);
            
            $histoBadge = new HistoVenteBadge();
            $histoBadge->setIdClient($listeIdClient[$key]);
            $histoBadge->setIdTypeBadge($badge->getId());
            $histoBadge->setQuantite($listeQuantite[$key]);
            $histoBadge->setDateVente(new \DateTime());  
            
            $em->persist($badge);
            $em->persist($histoBadge);              
        }
        
        $em->flush();
        
        return new Response(1);
    }
}
