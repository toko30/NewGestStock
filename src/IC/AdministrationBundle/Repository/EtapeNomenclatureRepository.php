<?php

namespace IC\AdministrationBundle\Repository;

/**
 * EtapeNomenclatureRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EtapeNomenclatureRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNbEtape($idVersion)
    {
        return $this->createQueryBuilder('en')
        ->select('COUNT(en.idVersionNomenclature) AS nbEtape')
        ->where('en.idVersionNomenclature = :idVersion')
        ->setParameter('idVersion', $idVersion)
        ->getQuery()
        ->getResult();
    }
    public function getEtapeNomenclatureOrder($idVersionNomenclature, $ordre)
    {
        return $this->createQueryBuilder('en')
        ->where('en.idVersionNomenclature = :idVersionNomenclature AND en.ordre = :ordre')   
        ->setParameter('idVersionNomenclature', $idVersionNomenclature)
        ->setParameter('ordre', $ordre)
        ->getQuery()
        ->getResult();        
    }
}