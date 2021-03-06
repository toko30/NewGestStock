<?php

namespace IC\ProductionBundle\Repository;

/**
 * VersionFicheDescriptiveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VersionFicheDescriptiveRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllVersion()
    {
        return $this->createQueryBuilder('vfd')
        ->join('vfd.ficheDescriptiveOption', 'fdo')
        ->join('fdo.optionFicheDescriptive', 'ofd')
        ->join('fdo.ficheDescriptive', 'fd')
        ->orderBy('vfd.idFicheDescriptiveOption', 'ASC')
        ->addOrderBy('vfd.version', 'DESC')
        ->addSelect('vfd', 'fdo', 'ofd', 'fd')
        ->getQuery()
        ->getResult();
    } 
    
    public function getNomenclatureFicheDescriptive($id)
    {
        return $this->createQueryBuilder('vfd')
        ->join('vfd.nomenclatureFicheDescriptive', 'nfd')
        ->join('nfd.versionNomenclature', 'vn')
        ->join('vn.nomenclature', 'n')
        ->addSelect('vfd', 'nfd')
        ->where('vfd.id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getResult();
    }
}
