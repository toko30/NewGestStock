<?php

namespace IC\ProductionBundle\Repository;

/**
 * ComposantNomenclatureRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ComposantNomenclatureRepository extends \Doctrine\ORM\EntityRepository
{
	public function getComposantNomenclatureProd($id)
	{
		return $this->createQueryBuilder('nc')
		->join('nc.version', 'v')
        ->join('v.nomenclature', 'n')
		->join('nc.composant', 'c')
		->join('c.famille', 'f')
		->join('c.sousFamille', 'sf')
        ->orderBy('c.nom')
		->addSelect('c', 'v', 'n')
		->where('nc.idVersion = :id')
		->setParameter('id', $id)
		->getQuery()
		->getResult();
	}
}
