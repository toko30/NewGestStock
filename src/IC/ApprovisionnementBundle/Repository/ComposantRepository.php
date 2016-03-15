<?php

namespace IC\ApprovisionnementBundle\Repository;

/**
 * ComposantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ComposantRepository extends \Doctrine\ORM\EntityRepository
{
    public function getComposantById($id)
    {
        return $this->createQueryBuilder('c')
        ->join('c.famille', 'f')
        ->LeftJoin('c.sousFamille', 's')
        ->orderBy('c.nom')
        ->addSelect('f', 's')
        ->where('c.id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getResult();            
    }

}
