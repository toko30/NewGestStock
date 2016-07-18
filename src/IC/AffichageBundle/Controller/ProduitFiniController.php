<?php

namespace IC\AffichageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProduitFiniController extends Controller
{
    public function produitFiniIdcaptAction(request $request)
    {
        $formProduitFiniLecteur = $request->get('formProduitFiniLecteur');
        
        if(!empty($formProduitFiniLecteur))
            $nbLecteur = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:Lecteur')->countLecteur($formProduitFiniLecteur);
        else
            $nbLecteur = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:Lecteur')->countLecteur(0);

        foreach ($nbLecteur as $key => $lecteur) 
        {
            $ficheDesc = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:VersionFicheDescriptive')->getFicheById($lecteur[0]->getIdLecteur());

            $version = $ficheDesc[0]->getVersion();
            $nom = $ficheDesc[0]->getFicheDescriptiveOption()->getFicheDescriptive()->getNom();

            $listeOption = '';
            foreach ($ficheDesc[0]->getFicheDescriptiveOption()->getOptionFicheDescriptive() as $option) 
            {
                $listeOption .= '-'.$option->getOptionProduitFini()->getAbreviation();
            }

            $listeLecteur[$key]['nom'] = $nom.$listeOption.'-V'.$version;
            $listeLecteur[$key]['description'] = $ficheDesc[0]->getFicheDescriptiveOption()->getDesignation();
            $listeLecteur[$key]['nbProduit'] = $lecteur['nbProduit']; 
        }

        return $this->render('ICAffichageBundle:produitFini:lecteur.html.twig', array('partie' => 'affichage', 'lecteur' => $listeLecteur));
    }

    public function produitFiniIdentifiantAction(request $request)
    {
        $formProduitFiniIdentifiant = $request->get('formProduitFiniIdentifiant');
        
        if(!empty($formProduitFiniIdentifiant))
            $nbBadge = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:TypeBadge')->getStockBadge($formProduitFiniIdentifiant);
        else
            $nbBadge = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:TypeBadge')->getStockBadge(0);
                    
        return $this->render('ICAffichageBundle:produitFini:identifiant.html.twig', array('partie' => 'affichage', 'badges' => $nbBadge));
    }

    public function produitFiniAutreAction(request $request)
    {
        $formProduitFiniLecteur = $request->get('formProduitFiniLecteur');
        
        if(!empty($formProduitFiniLecteur))
            $nbLecteur = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:LecteurAutre')->countLecteur($formProduitFiniLecteur);
        else
            $nbLecteur = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:LecteurAutre')->countLecteur(0); 
            
        $autres = $this->getDoctrine()->getManager()->getRepository('ICAffichageBundle:ProduitFiniAutre')->countAutre(); 

        return $this->render('ICAffichageBundle:produitFini:autre.html.twig', array('partie' => 'affichage', 'lecteur' => $nbLecteur, 'autres' => $autres));
    }
}
