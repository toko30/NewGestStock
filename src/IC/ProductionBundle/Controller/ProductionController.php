<?php
namespace IC\ProductionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use IC\ProductionBundle\Form\Type\ProductionType;
use IC\ProductionBundle\Entity\Production;
use IC\ProductionBundle\Entity\Lot;
use IC\ProductionBundle\Entity\CarteTest;
use IC\ProductionBundle\Entity\HistoProd;

class ProductionController extends Controller
{
    public function interneAction(Request $request, $all)
    {
        $em = $this->getDoctrine()->getManager(); 
        $data = $request->get('production');

        //AFFICHAGE LISTE COMPOSANT NOMENCLATURE
        if('POST' == $request->getMethod())
        {
        
            //recupération de la liste des composant nécéssaire à la production, le nb de prod manquant et le nom de la nomenclature
            $info = $this->container->get('ic_production')->getListComposantNomenclatureInterne($data);
            list($tabComposant, $nbProdManquant) = $info;                
            
            //génération de la vue avec les info de la carte et ses composants calculés précédement
            return $this->render('ICProductionBundle:Liste:interne.html.twig', array('partie' => 'production',
                                                                                     'quantite' => $data['quantite'], 
                                                                                     'listeNomenclature' => $tabComposant,
                                                                                     'idType' =>  $data['type'],
                                                                                     'idVersion' => $data['versionNomenclature'],
                                                                                     'nbProdManquant' => $nbProdManquant));        
        }
        //AFFICHAGE DES TABLEAUX PREVISIONNEL ET PROD EN COURS
        else
        {
            //recupération des information pour afficher les deux tableau de production
            $info = $this->container->get('ic_production')->getTabProdInterne();
            list($listeEnCours, $listePrevisionnelle) = $info;
            
            if($all == 0)
            {
                $listLastFicheDescriptive = $this->container->get('ic_production')->listLastFicheDescriptive();

                //Création du formulaire et affichage de la vue
                $form = $this->createForm(ProductionType::class, 0, array('data' => array('listLastFicheDescriptive' => $listLastFicheDescriptive)));
            }

            else
            {
                $listAllFicheDescriptive = $this->container->get('ic_production')->listAllFicheDescriptive();

                //Création du formulaire et affichage de la vue
                $form = $this->createForm(ProductionType::class, 0, array('data' => array('listLastFicheDescriptive' => $listAllFicheDescriptive)));
            }
            
            return $this->render('ICProductionBundle:Production:interne.html.twig', array('partie' => 'production',
                                                                                          'form' => $form->createView(),
                                                                                          'listeEnCours' => $listeEnCours,
                                                                                          'listePrevisionnelle' => $listePrevisionnelle,
                                                                                          'all' => $all));
        }
    }
    
    public function sousTraitantAction(Request $request, $id, $all)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->get('production');
        
        //AFFICHAGE LISTE COMPOSANT NOMENCLATURE
        if('POST' == $request->getMethod())
        {
            //recupération de la liste des composant nécéssaire à la production, le nb de prod manquant et le nom de la nomenclature
            $info = $this->container->get('ic_production')->getListComposantNomenclatureSousTraitant($data, $id);
            list($tabComposant, $nbProdManquant) = $info;  
            
            return $this->render('ICProductionBundle:Liste:sousTraitant.html.twig', array('partie' => 'production',
                                                                                          'id' => $id,
                                                                                          'quantite' => $data['quantite'],
                                                                                          'listeNomenclature' => $tabComposant,
                                                                                          'idType' =>  $data['type'],
                                                                                          'idVersion' => $data['versionNomenclature'],
                                                                                          'nbProdManquant' => $nbProdManquant));
        }
        //AFFICHAGE DES TABLEAUX PREVISIONNEL ET EN PROD EN COURS
        else
        {
            $info = $this->container->get('ic_production')->getTabProdSousTraitant($id);
            list($listeEnCours, $listePrevisionnelle) = $info;
            
            //Listage des dernières nomenclatures
            $listLastFicheDescriptive = $this->container->get('ic_production')->listLastFicheDescriptive();

            if($all == 0)
            {
                $listLastFicheDescriptive = $this->container->get('ic_production')->listLastFicheDescriptive();

                //Création du formulaire et affichage de la vue
                $form = $this->createForm(ProductionType::class, 0, array('data' => array('listLastFicheDescriptive' => $listLastFicheDescriptive)));
            }

            else
            {
                $listAllFicheDescriptive = $this->container->get('ic_production')->listAllFicheDescriptive();

                //Création du formulaire et affichage de la vue
                $form = $this->createForm(ProductionType::class, 0, array('data' => array('listLastFicheDescriptive' => $listAllFicheDescriptive)));
            }
                

            return $this->render('ICProductionBundle:Production:sousTraitant.html.twig', array('partie' => 'production',
                                                                                               'idST' => $id,
                                                                                               'form' => $form->createView(),
                                                                                               'listeEnCours' => $listeEnCours,
                                                                                               'listePrevisionnelle' => $listePrevisionnelle,
                                                                                               'all' => $all));
        }
    }
    
    public function calculAction(request $request, $idProducteur, $idType, $idVersion, $quantite1, $quantite2)
    {
        //Connexion doctrine
        $em = $this->getDoctrine()->getManager();
        
        if($idType == 0)
        {
            $VersionFicheDescriptive = $em->getRepository('ICProductionBundle:VersionFicheDescriptive')->getNomenclatureFicheDescriptive($idVersion);
            
            foreach($VersionFicheDescriptive[0]->getNomenclatureFicheDescriptive() as $versionNomenclature)
            {
                
                if($idProducteur != 0)
                {
                    $nomenclatureProdSt = $request->get('lieu');
                    
                    $lieuProd = 0;
                    foreach($nomenclatureProdSt as $prodSt)
                    {
                        if($versionNomenclature->getIdVersionNomenclature() == $prodSt)
                        {
                            $lieuProd = 1;
                            $idProd = $idProducteur;
                        }
                    }
                    if($lieuProd == 0)
                        $idProd = 0;
                }
                else
                {
                    $idProd = 0;
                }
           
                if($quantite1 != 0)
                {
                    $option = $request->get('option');
                    
                    //récupération des entitées pour les Jointures 
                    $lieu = $em->getRepository('ICProductionBundle:SousTraitant')->findOneBy(array('id' => $idProd));
                    $version = $em->getRepository('ICProductionBundle:VersionNomenclature')->findOneBy(array('id' => $versionNomenclature->getVersionNomenclature()->getId()));
                    
                    $prod = new Production();
                    
                    //déclaration des jointures (mise a jour auto de idLieu et idNomenclature)
                    $prod->setSousTraitant($lieu);
                    $prod->setVersion($version);
                    
                    $prod->setQuantite($quantite1);
                    $prod->setEtape(1);
                    $prod->setDateProd(new \Datetime());
                    $prod->setIdversionFicheDescriptive($idVersion);
                    if(isset($option))
                    {
                        $listeComposant = '';
                        
                        foreach ($option as $value)
                            $listeComposant .= $value.',';
                        
                        $listeComposant = trim($listeComposant, ',');
                        
                        $prod->setComposantUtilise($listeComposant);
                    }
                    
                    $em->persist($prod);
                    
                    if($quantite2 != 0)
                    {
                        $prod1 = new Production();
                        
                        //déclaration des jointures (mise a jour auto de idLieu et idNomenclature)
                        $prod1->setSousTraitant($lieu);
                        $prod1->setVersion($version);
                        
                        $prod1->setQuantite($quantite2);
                        $prod1->setEtape(1);
                        $prod1->setDateProd(new \Datetime());
                        $prod1->setIdversionFicheDescriptive($idVersion);
                        
                        $em->persist($prod1);
                    }             
                }                            
            }
        }
        else
        {
            if($quantite1 != 0)
            {
                //Connexion doctrine
                $em = $this->getDoctrine()->getManager();
                $option = $request->get('option');
                
                //récupération des entitées pour les Jointures 
                $lieu = $em->getRepository('ICProductionBundle:SousTraitant')->findOneBy(array('id' => $idProducteur));
                $version = $em->getRepository('ICProductionBundle:VersionNomenclature')->findOneBy(array('id' => $idVersion));
                
                $prod = new Production();
                
                //déclaration des jointures (mise a jour auto de idLieu et idNomenclature)
                $prod->setSousTraitant($lieu);
                $prod->setVersion($version);
                
                $prod->setQuantite($quantite1);
                $prod->setEtape(1);
                $prod->setDateProd(new \Datetime());
                $prod->setIdversionFicheDescriptive(0);
                
                if(isset($option))
                {
                    $listeComposant = '';
                    
                    foreach ($option as $value)
                        $listeComposant .= $value.',';
                    
                    $listeComposant = trim($listeComposant, ',');
                    
                    $prod->setComposantUtilise($listeComposant);
                }
                
                $em->persist($prod);
                
                if($quantite2 != 0)
                {
                    $prod1 = new Production();
                    
                    //déclaration des jointures (mise a jour auto de idLieu et idNomenclature)
                    $prod1->setSousTraitant($lieu);
                    $prod1->setVersion($version);
                    
                    $prod1->setQuantite($quantite2);
                    $prod1->setEtape(1);
                    $prod1->setDateProd(new \Datetime());
                    $prod1->setIdversionFicheDescriptive(0);
                    $em->persist($prod1);
                }             
            }            
        }
        
        $em->flush();   
        
        
        if($idProducteur == 0)
            return $this->redirectToRoute('ic_production_interne');
        else
            return $this->redirectToRoute('ic_production_sous_traitant', array('id' => $idProducteur));
    }
    
    public function lancementProdAction($idProd)
    {
        //Connexion doctrine
        $em = $this->getDoctrine()->getManager();
        
        //selection de la production à lancer et la nomenclature pour sortir les composants du stock
        $production = $em->getRepository('ICProductionBundle:Production')->findOneBy(array('id' => $idProd));
        $composantNomenclature = $em->getRepository('ICProductionBundle:ComposantNomenclature')->getComposantNomenclatureProdMP($production->getIdNomenclature());
        
        //Sortie des composants l'or de production interne
        if($production->getIdLieu() == 0)
        {
            foreach ($composantNomenclature as $composantNom)
            {
                $newQuantite = $composantNom->getComposant()->getStockInterne() - ($composantNom->getQuantite() * $production->getQuantite());
                
                $composant = $em->getRepository('ICProductionBundle:Composant')->find($composantNom->getComposant()->getId());
                
                $composant->setStockInterne($newQuantite);
            }
            
            $em->flush();           
        }
        //Sortie des composants l'or de production Sous traitant
        else
        {
            $composantUtilise = explode(',', $production->getComposantUtilise());
            
            foreach ($composantNomenclature as $composantNom)
            {
                $composantSt = $em->getRepository('ICProductionBundle:ComposantSousTraitant')->getComposantSt($production->getIdLieu());
                
                foreach ($composantSt as $sousTraitant) 
                {
                    if(in_array($sousTraitant->getIdComposant(), $composantUtilise))
                    {
                        if($sousTraitant->getIdComposant() == $composantNom->getIdComposant())
                        {
                            $newQuantite = $sousTraitant->getQuantite() - ($composantNom->getQuantite() * $production->getQuantite());
                            
                            $sousTraitant->setQuantite($newQuantite);                                                             
                        }
                    }
                }   
            }   
            $em->flush();             
        }
        
        //Passage de la production de l'etape 1(prévisionnelle) à l'étape 2(prod)
        $production->setEtape(2);
        $production->setDateProd(new \Datetime());
        $em->flush();
        
        //redirection vers l'affichage
        if($production->getIdLieu() == 0)
            return $this->redirectToRoute('ic_production_interne');
        else
            return $this->redirectToRoute('ic_production_sous_traitant', array('id' => $production->getIdLieu()));
    }
    
    public function lancementTestAction($idProd)
    {
        //Connexion doctrine
        $em = $this->getDoctrine()->getManager();
        
        //sélection de la production qui vient d'être terminée
        $production = $em->getRepository('ICProductionBundle:Production')->findOneBy(array('id' => $idProd));
        $versionFicheDescriptive = $em->getRepository('ICProductionBundle:VersionFicheDescriptive')->findOneBy(array('id' => $production->getIdVersionFicheDescriptive()));
        $idProducteur = $production->getIdLieu();
        $nbProd = $production->getQuantite();
        
        //Enregistrement historique de production
        $histoProd = new HistoProd();
        $histoProd->setIdVersion($production->getIdNomenclature());
        $histoProd->setQuantite($production->getQuantite());
        $histoProd->setDateProd(new \Datetime());
        $histoProd->setLieu($production->getIdLieu());
        $em->persist($histoProd);
        
        //création du lot de lecteur
        $lot = new Lot();
        $lot->setIdVersionNomenclature($production->getVersion()->getId());
        $lot->setDateProd($production->getDateProd());
        $lot->setDateTest(new \Datetime());
        $lot->setVersionFicheDescriptive($versionFicheDescriptive);
        $em->persist($lot);
        $em->flush();
        
        //création de la liste de carte à tester ainsi que leurs numéro de série
        for($i = 0; $i < $nbProd; $i++)
        {
            while(true)
            {
                $rand = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
                
                //vérification que le numéro généré n'est pas déja utilisé
                $verifDispoLecteur = $em->getRepository('ICProductionBundle:Lecteur')->findOneBy(array('numSerie' => $rand));
                $verifDispoLecteurAutre = $em->getRepository('ICProductionBundle:LecteurAutre')->findOneBy(array('numSerie' => $rand));
                $verifDispoCarteTest = $em->getRepository('ICProductionBundle:CarteTest')->findOneBy(array('numSerie' => $rand));
                $verifDispoHistoReprise = $em->getRepository('ICProductionBundle:HistoReprise')->findOneBy(array('numSerie' => $rand));
                $verifDispoHistoCarteHs = $em->getRepository('ICProductionBundle:HistoCarteHs')->findOneBy(array('numSerie' => $rand));
                $verifDispoNomenclatureLecteur = $em->getRepository('ICProductionBundle:NomenclatureLecteur')->findOneBy(array('numSerie' => $rand));
                
                //s'il n'est pas utilisé on ajoute le ligne dans CarteTest
                if(empty($verifDispoLecteur) && empty($verifDispoLecteurAutre) && empty($verifDispoCarteTest) &&
                   empty($verifDispoHistoReprise) && empty($verifDispoHistoCarteHs) && empty($verifDispoNomenclatureLecteur))
                {
                    $lecteurTest = new CarteTest();  
                    $lecteurTest->setNumSerie($rand);
                    $lecteurTest->setIdLot($lot->getId());
                    $lecteurTest->setEtape(0);
                    $lecteurTest->setAssemble(0);

                    $em->persist($lecteurTest);
                    break;
                }
            }
        }
        
        //Supréssion de la production terminée
        $em->remove($production);
        $em->flush();
        
        //redirection vers l'affichage        
        if($idProducteur == 0)
            return $this->redirectToRoute('ic_production_interne');
        else
            return $this->redirectToRoute('ic_production_sous_traitant', array('id' => $idProducteur));
    }
    
    public function suppressionAction($idProd)
    {
        //Connexion doctrine
        $em = $this->getDoctrine()->getManager();
        
        $production = $em->getRepository('ICProductionBundle:Production')->findOneBy(array('id' => $idProd));
        $idProducteur = $production->getIdLieu();
        
        $em->remove($production);
        $em->flush();
        
        //redirection vers l'affichage
        if($idProducteur == 0)
            return $this->redirectToRoute('ic_production_interne');
        else
            return $this->redirectToRoute('ic_production_sous_traitant', array('id' => $idProducteur));
    }
    
    public function changementTypeAction($idType, request $request)
    {
        $i = 0;
        $req = '';
        if($idType == 0)
        {
            if($request->get('all') == 0)
                $listLastFicheDescriptive = $this->container->get('ic_production')->listLastFicheDescriptive();
            else
                $listLastFicheDescriptive = $this->container->get('ic_production')->listAllFicheDescriptive(); 

            foreach ($listLastFicheDescriptive as $value) 
            {

                $option = '';
                foreach ($value->getFicheDescriptiveOption()->getOptionFicheDescriptive() as $value1) 
                {
                    $option .= $value1->getOptionProduitFini()->getAbreviation().'-';
                }
                $option = trim($option, '-');
                
                $lastVersion[$i]['nom'] = $value->getFicheDescriptiveOption()->getFicheDescriptive()->getNom().'-'.$option.'-V'.$value->getVersion();
                $lastVersion[$i++]['id'] = $value->getId();
            }
        }
        else
        {
            $listLastNomenclature = $this->container->get('ic_production')->listLastNomenclature();
            
            foreach ($listLastNomenclature as $value) 
            {               
                $lastVersion[$i]['nom'] = $value->getNomenclature()->getNom().'-V'.$value->getVersion();
                $lastVersion[$i++]['id'] = $value->getId();
            }
        }
        
        foreach ($lastVersion as $version) 
        {
            $req .= '<option value="'.$version['id'].'" >'.$version['nom'].'</option>';
        }   
        
        return new Response($req);   
    }
}
