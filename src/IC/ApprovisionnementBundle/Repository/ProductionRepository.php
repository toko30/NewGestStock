<?php

namespace IC\ApprovisionnementBundle\Repository;

/**
 * ProductionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getListProdEnAttente()
    {
        return $this->createQueryBuilder('p')
        ->join('p.version', 'v')
        ->where('p.etape = 1')
        ->orderBy('p.idLieu', 'ASC')
        ->getQuery()
        ->getResult();        
    }
    
    public function getListProdSousTraitant()
    {
        return $this->createQueryBuilder('p')
        ->where('p.etape = 1 AND p.idLieu != 0')
        ->orderBy('p.idLieu', 'ASC')
        ->getQuery()
        ->getResult();         
    }
    
    public function getListProdSousTraitantById($id)
    {
        return $this->createQueryBuilder('p')
        ->where('p.etape = 1 AND p.idLieu = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getResult();  
    }
}