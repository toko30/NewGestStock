<?php

namespace IC\ApprovisionnementBundle\Repository;

/**
 * ApproRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApproRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastAppro()
    {
		return $this->createQueryBuilder('a')
        ->select('a')
        ->orderby('a.id', 'DESC')
        ->setMaxResults('1')
		->getQuery()
		->getResult();
	}
}