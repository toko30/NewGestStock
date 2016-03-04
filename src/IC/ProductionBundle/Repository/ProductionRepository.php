<?php

namespace IC\ProductionBundle\Repository;

/**
 * ProductionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getProdInterne($idLieu)
    {
        return $this->createQueryBuilder('p')
        ->join('p.version', 'v')
        ->join('v.nomenclature', 'n')
        ->where('p.idLieu = :idLieu')
        ->setParameter('idLieu', $idLieu)
        ->orderBy('p.id')
        ->getQuery()
        ->getResult();
    }
}