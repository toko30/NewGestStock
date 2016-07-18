<?php

namespace IC\AffichageBundle\Repository;

class LecteurAutreRepository extends \Doctrine\ORM\EntityRepository
{
    public function countLecteur($critere)
   {
        $req = $this->createQueryBuilder('l')
        ->select('COUNT(l.idLecteurAutre) as nbProduit')
        ->join('l.typeLecteurAutre', 't')
        ->addSelect('l', 't')
        ->where('l.vendu = 0')
        ->groupBy('l.idLecteurAutre');        
        
       if(!empty($critere['recherche']))
        {
            $req->andWhere('n.nom LIKE :ref')
            ->setParameter('ref', '%'.$critere['recherche'].'%');
        }
                
        if(!empty($critere['type']))
        {
            $req->andWhere('t.type IN (:id1)') 
            ->setParameter('id1', $critere['type']);
        }
                
        if(!empty($critere['frequence']))
        {
            $req->andWhere('t.frequence IN (:id2)') 
            ->setParameter('id2', $critere['frequence']);
        }
        
        return $req->getQuery()->getResult();	   
   }
}
