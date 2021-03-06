<?php

namespace IC\AffichageBundle\Repository;

class ProduitFiniNomenclatureRepository extends \Doctrine\ORM\EntityRepository
{
   
   public function getProduitFiniNomenclatureById($id)
   {
		return $this->createQueryBuilder('nc')
        ->join('nc.composant', 'c')
		->join('nc.version', 'v')
        ->join('v.nomenclature', 'n')
		->leftJoin('c.famille', 'f')
		->leftJoin('c.sousFamille', 'sf')
        ->orderBy('c.nom')
		->addSelect('c', 'v', 'n')
		->where('nc.idVersion = :id')
		->setParameter('id', $id)
		->getQuery()
		->getResult();   
   }
}
