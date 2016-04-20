<?php

namespace IC\AdministrationBundle\Repository;

/**
 * EtapeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EtapeRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllEtapeAndTest()
    {
        return $this->createQueryBuilder('e')
        ->leftJoin('e.test', 't')
        ->where('e.id != -1 AND e.id != -2')
        ->getQuery()
        ->getresult();
    }
    
    public function getEtapeNotUsed($listeEtapeUsed)
    {
        $req = $this->createQueryBuilder('e');
        
        if(!empty($listeEtapeUsed))
        {
            $req->where('e.id NOT IN (:listeEtapeUsed)')
            ->setParameter('listeEtapeUsed', $listeEtapeUsed)  ;          
        }

        return $req->getQuery()
        ->getResult();
    }
    public function getTestByEtape($idEtape)
    {
        return $this->createQueryBuilder('e')
        ->leftJoin('e.test', 't')
        ->addSelect('e', 't')
        ->where('e.id = :idEtape')
        ->setparameter('idEtape', $idEtape)
        ->getQuery()
        ->getresult();
    }
}
