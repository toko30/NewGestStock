<?php

namespace IC\ProduitFiniBundle\Repository;

/**
 * HistoVenteLecteurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HistoVenteLecteurRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllInfoSav($numSerie)
    {
        return $this->createQueryBuilder('hl')
        ->join('hl.client', 'c')
        ->addSelect('hl', 'c')
        ->where('hl.numSerie IN(:numSerie)')
        ->setParameter('numSerie', array_values($numSerie))
        ->getQuery()
        ->getResult();         
    }
}
