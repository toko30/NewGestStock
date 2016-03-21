<?php

namespace IC\ApprovisionnementBundle\Entity;

/**
 * VersionNomenclature
 */
class VersionNomenclature
{
    /**
     * @var integer
     */
    private $idNomenclature;

    /**
     * @var integer
     */
    private $version;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idNomenclature
     *
     * @param integer $idNomenclature
     *
     * @return VersionNomenclature
     */
    public function setIdNomenclature($idNomenclature)
    {
        $this->idNomenclature = $idNomenclature;

        return $this;
    }

    /**
     * Get idNomenclature
     *
     * @return integer
     */
    public function getIdNomenclature()
    {
        return $this->idNomenclature;
    }

    /**
     * Set version
     *
     * @param integer $version
     *
     * @return VersionNomenclature
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $produitFiniNomenclature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produitFiniNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produitFiniNomenclature
     *
     * @param \IC\ApprovisionnementBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature
     *
     * @return VersionNomenclature
     */
    public function addProduitFiniNomenclature(\IC\ApprovisionnementBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature)
    {
        $this->produitFiniNomenclature[] = $produitFiniNomenclature;

        return $this;
    }

    /**
     * Remove produitFiniNomenclature
     *
     * @param \IC\ApprovisionnementBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature
     */
    public function removeProduitFiniNomenclature(\IC\ApprovisionnementBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature)
    {
        $this->produitFiniNomenclature->removeElement($produitFiniNomenclature);
    }

    /**
     * Get produitFiniNomenclature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduitFiniNomenclature()
    {
        return $this->produitFiniNomenclature;
    }
}
