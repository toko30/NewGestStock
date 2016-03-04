<?php

namespace IC\AdministrationBundle\Repository;

/**
 * AutreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AutreRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllAutre()
    {
        return $this->createQueryBuilder('a')
        ->join('a.fournisseur', 'f')
        ->join('a.typeAutre', 'ta')
        ->addSelect('f', 'ta')
        ->getQuery()->getResult();        
    }
}
