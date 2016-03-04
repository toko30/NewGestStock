<?php

namespace IC\AdministrationBundle\Repository;

class FournisseurRepository extends \Doctrine\ORM\EntityRepository
{ 
    public function getFournisseurByType($idType)
    {
        $req = $this->createQueryBuilder('f');
        
        if($idType == 2)
            $req->leftJoin('f.badge', 'b');
        elseif($idType == 3)
            $req->leftJoin('f.lecteurAutre', 'la');
        elseif($idType == 4)
            $req->leftJoin('f.autre', 'a');
            
        return $req->where('f.type = :type')
        ->setParameter('type', $idType)
        ->getQuery()
        ->getResult();
    }
}
