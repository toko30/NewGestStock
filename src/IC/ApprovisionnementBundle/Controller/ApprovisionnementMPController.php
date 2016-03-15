<?php

namespace IC\ApprovisionnementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApprovisionnementMPController extends Controller
{
    public function approInterneProductionAction()
    {   
        $em = $this->getDoctrine()->getManager();
        
        //calcul du nombre de composant nécéssaire à la production
        $info = $this->container->get('ic_approvisionnementMP')->calculApproProd();
        list($quantiteCommande, $composantStockST) = $info;
        
        //ajout du stock actuel du ou des sous traitant au quantité à commander
        if(isset($composantStockST['idComposant'][0]))
            $quantiteCommande = $this->container->get('ic_approvisionnementMP')->ajoutStockST($composantStockST, $quantiteCommande);

        //soustraction des appro en cour aux quantités nécéssaires
        $listApproEnCours = $em->getRepository('ICApprovisionnementBundle:ApproComposant')->getApproEnCours();
        
        if($listApproEnCours != null)
            $quantiteCommande = $this->container->get('ic_approvisionnementMP')->ajoutApproEnCour($listApproEnCours, $quantiteCommande);
        
        //sortie des composants dont le stock est suffisant
        $quantiteCommande = $this->container->get('ic_approvisionnementMP')->verifStockCommande($quantiteCommande, 1);
        
        //récupération des fournisseurs dont le composant est disponible
        if($quantiteCommande != null)
            $listComposantFournisseur = $em->getRepository('ICApprovisionnementBundle:Fournisseur')->getComposantFournisseurById($quantiteCommande);
        else
            $listComposantFournisseur = array();
        
        return $this->render('ICApprovisionnementBundle:MP:approMP.html.twig', array('partie' => 'approvisionnement', 
                                                                                     'titrePartie' => 'Approvisionnement nécéssaire à la production',
                                                                                     'textPartie' => 'Aucun approvisionnement nécéssaire à la production',
                                                                                     'textPartie1' => 'Si une production ne peut être lancée, vérifier les composants en cours d\'approvisionnement',
                                                                                     'page' => 'production',
                                                                                     'fournisseurs' => $listComposantFournisseur,
                                                                                     'quantiteCommande' => $quantiteCommande));
    }
    
    public function approInterneCritiqueAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //Calcul des composant dont les stock mini est superieur au stock actuel
        $quantiteCommande = $this->container->get('ic_approvisionnementMP')->calculApproCritique();
        
        //soustraction des appro en cour au quantité nécéssaires
        $listApproEnCours = $em->getRepository('ICApprovisionnementBundle:ApproComposant')->getApproEnCours();
        
        if($listApproEnCours !== null)
            $quantiteCommande = $this->container->get('ic_approvisionnementMP')->ajoutApproEnCour($listApproEnCours, $quantiteCommande);    
  
       //sortie des composants dont le stock est suffisant
        $quantiteCommande = $this->container->get('ic_approvisionnementMP')->verifStockCommande($quantiteCommande, 0); 
                  
        //récupération des fournisseurs dont le composant est disponible
        if(!empty($quantiteCommande))
            $listComposantFournisseur = $em->getRepository('ICApprovisionnementBundle:Fournisseur')->getComposantFournisseurById($quantiteCommande);
        else
            $listComposantFournisseur = array();          
               
        return $this->render('ICApprovisionnementBundle:MP:approMP.html.twig', array('partie' => 'approvisionnement',
                                                                                        'titrePartie' => 'Approvisionnement des composants en etat critique',
                                                                                        'textPartie' => 'Aucun composant dont le stock est en etat critique',
                                                                                        'page' => 'critique',
                                                                                        'fournisseurs' => $listComposantFournisseur,
                                                                                        'quantiteCommande' => $quantiteCommande));
    }
    
    public function calculApproAction(request $request, $idFournisseur, $page)
    {
        //Ajoute les composant a la liste des appro en cours
        $this->container->get('ic_approvisionnementMP')->addAproComposant($request, $idFournisseur);
        
        if($page == 'critique')
            return $this->redirectToRoute('ic_approvisionnement_mp_critique');
        else
            return $this->redirectToRoute('ic_approvisionnement_mp_production');
    }
}
