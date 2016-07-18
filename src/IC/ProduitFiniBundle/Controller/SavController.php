<?php

namespace IC\ProduitFiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IC\ProduitFiniBundle\Entity\Sav;

class SavController extends Controller
{
    public function gestionSavAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrayNumSerie = array();
        $sav = 0;    

        $listeSavs = $em->getRepository('ICProduitFiniBundle:Sav')->findNotReturn();
        
        foreach($listeSavs as $listeSav)
        {
            $arrayNumSerie[] = $listeSav->getNumSerie();
            $arrayId[] = $listeSav->getId();
            $arrayDate[] = $listeSav->getDateReception();
        }

        $listeInfoSAV = $em->getRepository('ICProduitFiniBundle:Lecteur')->getAllInfoSav($arrayNumSerie);
        $listeClientSAV = $em->getRepository('ICProduitFiniBundle:HistoVenteLecteur')->getAllInfoSav($arrayNumSerie);
        $i = 0;
        var_dump($listeInfoSAV);
        foreach ($listeInfoSAV as $SAV) 
        {
            $version = $SAV->getVersionFicheDescriptive()->getVersion();
            $nom = $SAV->getVersionFicheDescriptive()->getFicheDescriptiveOption()->getFicheDescriptive()->getNom();

            $listeOption = '';
            foreach ($SAV->getVersionFicheDescriptive()->getFicheDescriptiveOption()->getOptionFicheDescriptive() as $option) 
            {
                $listeOption .= '-'.$option->getOptionProduitFini()->getAbreviation();
            }

            $nomFiche = $nom.$listeOption.'-V'.$version;

            foreach ($listeClientSAV as $clientSAV) 
            {
                if($SAV->getNumSerie() == $clientSAV->getNumSerie())
                {
                    foreach ($arrayNumSerie as $key => $numSerie) 
                    {
                        if($numSerie == $SAV->getNumSerie())
                        {
                            $tabSav[$i]['id'] = $arrayId[$key];
                            $tabSav[$i]['dateReception'] = $arrayDate[$key];
                            $tabSav[$i]['numSerie'] = $numSerie;
                        }
                    }
                    
                    $tabSav[$i]['client'] = $clientSAV->getclient()->getNom();
                    $tabSav[$i++]['lecteur'] = $nomFiche;
                    
                    break;
                }
            }
        }
        
        return $this->render('ICProduitFiniBundle:Sav:gestionSav.html.twig', array('partie' => 'produit_fini',
                                                                                   'listeSAV' => $tabSav));
    }
    
    public function addSavAction(request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $verifVendu = $em->getRepository('ICProduitFiniBundle:HistoVenteLecteur')->findOneBy(array('numSerie' => $request->get('numSerie')));
        
        if(!empty($verifVendu))
        {
            $sav = new Sav();
            $sav->setNumSerie($request->get('numSerie'));
            $sav->setDateReception(new \DateTime());
            
            $em->persist($sav);
            $em->flush();            
        }

        return $this->RedirectToRoute('ic_produit_fini_gestion_sav');
    }
    
    public function detailSavAction($idSAV)
    {
        
        return $this->render('ICProduitFiniBundle:Sav:detailSav.html.twig', array('partie' => 'produit_fini'));
    }
    
    public function updateSavAction($idSAV)
    {
        return $this->RedirectToRoute('ic_produit_fini_detail_sav', array('idSAV' => 0));
    }
    
    public function histoSavAction()
    {        
        $em = $this->getDoctrine()->getManager();
        $listeSavs = $em->getRepository('ICProduitFiniBundle:Sav')->findNotReturn();
        
        foreach($listeSavs as $listeSav)
        {
            $arrayNumSerie[] = $listeSav->getNumSerie();
        }

        $listeInfoSAV = $em->getRepository('ICProduitFiniBundle:Lecteur')->getAllInfoSav($arrayNumSerie);
        $listeClientSAV = $em->getRepository('ICProduitFiniBundle:HistoVenteLecteur')->getAllInfoSav($arrayNumSerie);

        //var_dump($listeClientSAV);

        foreach($listeClientSAV as $infoSAV)
        {
            $arrayInfo[] = $infoSAV->getNumSerie();
        }      

        $i = 0;
        foreach($arrayNumSerie as $numserie)
        {
            foreach($arrayInfo as $infonumserie)
            {
                if($numserie == $infonumserie)
                {
                    echo $i++.' '.$numserie.' : '.$infonumserie.'<br>';
                }
            }
        }
        //var_dump($nonExist);
        return $this->render('ICProduitFiniBundle:Sav:histoSav.html.twig', array('partie' => 'produit_fini'));
    }
}
