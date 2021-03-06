<?php

namespace IC\TestBundle\Repository;

/**
 * AttenteAssemblageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttenteAssemblageRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllCarte()
    {
        return $this->createQueryBuilder('aa')
        ->orderBy('aa.idVersionFicheDescriptive', 'ASC')
        ->addorderBy('aa.idVersionNomenclature', 'ASC')
        ->getQuery()
        ->getResult();
    }
    
    public function getAllNomenclature($idVersionFicheDescriptive)
    {
        return $this->createQueryBuilder('aa')
        ->orderBy('aa.idVersionNomenclature', 'ASC')
        ->where('aa.idVersionFicheDescriptive = :idVersionFicheDescriptive')
        ->setParameter('idVersionFicheDescriptive', $idVersionFicheDescriptive)
        ->getQuery()
        ->getResult();
    }
}
