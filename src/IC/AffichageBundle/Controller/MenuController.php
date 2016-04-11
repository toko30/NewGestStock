<?php

namespace IC\AffichageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IC\AffichageBundle\Form\Type\ComposantInterneType;
use IC\AffichageBundle\Form\Type\ComposantSousTraitantType;
use IC\AffichageBundle\Form\Type\ProduitFiniLecteurType;
use IC\AffichageBundle\Form\Type\ProduitFiniIdentifiantType;

class MenuController extends Controller
{
    public function menuAction($url)
    {
        //Connexion Doctrine
        $em = $this->getDoctrine()->getManager();
        
        //Liste des requètes Doctrine pour les options du menu
        
        $listSousTraitant = $em->getRepository('ICAffichageBundle:SousTraitant')->getAllSousTraitant();
        $listNomenclature = $em->getRepository('ICAffichageBundle:VersionNomenclature')->getAllNomenclatureLastVersion();
        $listAppro = $em->getRepository('ICAffichageBundle:Appro')->getListStAppro();
        $listProd = $em->getRepository('ICAffichageBundle:Production')->getListStProd();
        //Création des formulaires
        if($url == 'ic_affichage_composant_interne')
            $form = $this->createForm(ComposantInterneType::class);
        elseif($url == 'ic_affichage_produit_fini_lecteur_cv' || $url == 'ic_affichage_produit_fini_interne')
            $form = $this->createForm(ProduitFiniLecteurType::class);
        elseif($url == 'ic_affichage_produit_fini_identifiant')
            $form = $this->createForm(ProduitFiniIdentifiantType::class);
        else
            $form = $this->createForm(ComposantSousTraitantType::class);
            
        return $this->render('ICAffichageBundle:MenuVertical:menu.html.twig', array('form' => $form->createView(),
                                                                                    'url' => $url, 
                                                                                    'sousTraitants' => $listSousTraitant, 
                                                                                    'nomenclatures' => $listNomenclature,
                                                                                    'appro' => $listAppro,
                                                                                    'prod' => $listProd));
    }
}
