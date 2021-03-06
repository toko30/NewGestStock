<?php

namespace IC\AffichageBundle\Repository;

class ApproRepository extends \Doctrine\ORM\EntityRepository
{
   public function getListStAppro()
   {
		return $this->createQueryBuilder('a')
		->where('a.typeProduit = 1')
		->getQuery()
		->getResult();
   }
    public function getApproLecteur()
    {
        return $this->createQueryBuilder('a')
        ->join('a.approLecteur', 'al')
        ->join('al.typeLecteurAutre', 'tl')
        ->join('a.fournisseur', 'f')
        ->addSelect('a', 'f', 'al', 'tl')
        ->orderBy('al.idCommande')
        ->where('a.typeProduit = 3')
        ->getQuery()
        ->getResult();
    }
    
    public function getApproAutre()
    {
        return $this->createQueryBuilder('a')
        ->join('a.approAutre', 'aa')
        ->join('aa.autre', 'a1')
        ->join('a.fournisseur', 'f')
        ->addSelect('a', 'aa', 'f', 'a1')
        ->orderby('aa.idCommande')
        ->where('a.typeProduit = 4')
        ->getQuery()
        ->getResult();
    }
    
   public function getApproIdentifiant()
   {
		return $this->createQueryBuilder('a')
		->join('a.approIdentifiant', 'ai')
		->join('ai.typeBadge', 'tb')
        ->join('a.fournisseur', 'f')
		->addSelect('a', 'tb', 'ai', 'f')
		->orderby('ai.idCommande')
		->where('a.typeProduit = 2')
		->getQuery()
		->getResult();
   }
   
   public function getApproComposant()
   {
		return $this->createQueryBuilder('a')
		->join('a.approComposant', 'ac')
		->join('ac.composant', 'c')
		->addSelect('ac', 'c', 'a')
		->orderby('ac.idCommande')
		->where('a.typeProduit = 1')
		->getQuery()
		->getResult();       
   }
}
