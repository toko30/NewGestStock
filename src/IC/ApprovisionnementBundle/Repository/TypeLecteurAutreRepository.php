<?php

namespace IC\ApprovisionnementBundle\Repository;

/**
 * TypeLecteurAutreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypeLecteurAutreRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllTypeLecteur()
    {
        return $this->createQueryBuilder('tl')
        ->join('tl.fournisseur', 'f')
        ->orderBy('tl.idFournisseur', 'ASC')
        ->addSelect('f')
        ->getQuery()
        ->getResult();
    }
}
