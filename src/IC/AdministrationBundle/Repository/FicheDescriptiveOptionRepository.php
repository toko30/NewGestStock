<?php

namespace IC\AdministrationBundle\Repository;

/**
 * FicheDescriptiveOptionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FicheDescriptiveOptionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllOptionAndVersion($idFiche)
    {
        return $this->createQueryBuilder('fdo')
        ->join('fdo.optionFicheDescriptive', 'ofd')
        ->join('ofd.optionProduitFini', 'opf')
        ->join('fdo.versionFicheDescriptive', 'vfd')
        ->leftJoin('vfd.nomenclatureFicheDescriptive', 'nfd')
        ->leftJoin('nfd.versionNomenclature', 'vn')
        ->leftJoin('vn.nomenclature', 'n')
        ->orderBy('fdo.id', 'ASC')
        ->orderBy('vfd.id', 'ASC')
        ->addSelect('fdo', 'ofd', 'opf', 'vfd', 'nfd', 'vn', 'n')
        ->where('fdo.idFicheDescriptive = :idFiche')
        ->setparameter('idFiche', $idFiche)
        ->getQuery()
        ->getResult();
    } 
}
