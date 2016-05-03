<?php

namespace IC\TestBundle\Repository;

/**
 * CarteTestRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarteTestRepository extends \Doctrine\ORM\EntityRepository
{
    public function getListeByEtape($idLot, $idEtape)
    {
        return $this->createQueryBuilder('ct')
        ->where('ct.idLot = :idLot')
        ->andWhere('ct.etape = :etapeNomenclature')
        ->setParameter('idLot', $idLot)
        ->setParameter('etapeNomenclature', $idEtape)
        ->orderBy('ct.numSerie', 'ASC')
        ->getQuery()
        ->getresult();
    }
    
    public function getLotAndTestByNumSerie($numSerie)
    {
        return $this->createQueryBuilder('ct')
        ->join('ct.lot', 'l')
        ->addSelect('ct', 'l')
        ->where('ct.numSerie = :numSerie')
        ->setParameter('numSerie', $numSerie)
        ->getQuery()
        ->getResult();
    }
}
