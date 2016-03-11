<?php

namespace IC\ApprovisionnementBundle\Classes;
use Doctrine\ORM\EntityManager;
use IC\ApprovisionnementBundle\Entity\Appro;
use IC\ApprovisionnementBundle\Entity\ApproIdentifiant;
use IC\ApprovisionnementBundle\Entity\ApproAutre;
use IC\ApprovisionnementBundle\Entity\ApproLecteur;

class ICApprovisionnementPF
{
    protected $doctrine;
    
    public function __construct(EntityManager $doctrine)
    {      
        $this->doctrine = $doctrine;
    }
    
    public function addApproIdentifiant($request, $idFournisseur)
    {
            $doctrine = $this->doctrine;
            $existe = 0;
            
            $fournisseur = $doctrine->getRepository('ICApprovisionnementBundle:Fournisseur')->findOneBy(array('id' => $idFournisseur));
            
            $appro = new Appro();
            $appro->setFournisseur($fournisseur);
            $appro->setTypeProduit(2);
            $appro->setDateCommande(new \Datetime());
            
            $doctrine->persist($appro);
            $doctrine->flush();  
                
            $lastAppro = $doctrine->getRepository('ICApprovisionnementBundle:Appro')->getLastAppro();
        
            foreach ($request->get('listId') as $id) 
            {    
                $quantite = $request->get($id);
                
                if(!empty($quantite))
                {
                    $existe = 1; 
                    $badge = $doctrine->getRepository('ICApprovisionnementBundle:TypeBadge')->findOneBy(array('id' => $id));
                    
                    $composantAppro = new ApproIdentifiant();
                    $composantAppro->setTypeBadge($badge);
                    $composantAppro->setQuantite($request->get($id));
                    $composantAppro->setAppro($lastAppro[0]);
                    
                    $doctrine->persist($composantAppro);                    
                }
            }
            
            if($existe == 0)
            {
                $doctrine->remove($lastAppro[0]);
            } 
                 
            $doctrine->flush();
    }
    public function addApproAutre($request, $idFournisseur)
    {
        $doctrine = $this->doctrine;
        $existe = 0;
        $fournisseur = $doctrine->getRepository('ICApprovisionnementBundle:Fournisseur')->findOneBy(array('id' => $idFournisseur));
            
        $appro = new Appro();
        $appro->setFournisseur($fournisseur);
        $appro->setTypeProduit($fournisseur->getType());
        $appro->setDateCommande(new \Datetime());
        
        $doctrine->persist($appro);
        $doctrine->flush();
            
        $lastAppro = $doctrine->getRepository('ICApprovisionnementBundle:Appro')->getLastAppro();
        
        if($fournisseur->getType() == 4)
        {
            foreach ($request->get('listId') as $id) 
            {
                $quantite = $request->get($id);
                
                if(!empty($quantite))
                {
                    $existe = 1;
                    $autre = $doctrine->getRepository('ICApprovisionnementBundle:Autre')->findOneBy(array('id' => $id));

                    $approAutre = new ApproAutre();
                    $approAutre->setAutre($autre);
                    $approAutre->setQuantite($request->get($id));
                    $approAutre->setAppro($lastAppro[0]);
                    
                    $doctrine->persist($approAutre);            
                }
            }
        }
        elseif($fournisseur->getType() == 3)
        {
            foreach ($request->get('listId') as $id) 
            {
                $vide = $request->get($id);
                
                if(!empty($vide))
                {
                    $existe = 1;
                    $typeLecteur = $doctrine->getRepository('ICApprovisionnementBundle:TypeLecteurAutre')->findOneBy(array('id' => $id));

                    $approLecteur = new ApproLecteur();
                    $approLecteur->setTypeLecteurAutre($typeLecteur);
                    $approLecteur->setQuantite($request->get($id));
                    $approLecteur->setAppro($lastAppro[0]);
                    
                    $doctrine->persist($approLecteur);  
                }          
            }
        }
        
        if($existe == 0)
        {
            $doctrine->remove($lastAppro[0]);
        }         
        $doctrine->flush();       
    }
}
