<?php

namespace IC\AdministrationBundle\Entity;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $composantNomenclature;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $produitFiniNomenclature;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etapeNomenclature;

    /**
     * @var \IC\AdministrationBundle\Entity\Nomenclature
     */
    private $nomenclature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->composantNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
        $this->produitFiniNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etapeNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add composantNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\ComposantNomenclature $composantNomenclature
     *
     * @return VersionNomenclature
     */
    public function addComposantNomenclature(\IC\AdministrationBundle\Entity\ComposantNomenclature $composantNomenclature)
    {
        $this->composantNomenclature[] = $composantNomenclature;

        return $this;
    }

    /**
     * Remove composantNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\ComposantNomenclature $composantNomenclature
     */
    public function removeComposantNomenclature(\IC\AdministrationBundle\Entity\ComposantNomenclature $composantNomenclature)
    {
        $this->composantNomenclature->removeElement($composantNomenclature);
    }

    /**
     * Get composantNomenclature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComposantNomenclature()
    {
        return $this->composantNomenclature;
    }

    /**
     * Add produitFiniNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature
     *
     * @return VersionNomenclature
     */
    public function addProduitFiniNomenclature(\IC\AdministrationBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature)
    {
        $this->produitFiniNomenclature[] = $produitFiniNomenclature;

        return $this;
    }

    /**
     * Remove produitFiniNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature
     */
    public function removeProduitFiniNomenclature(\IC\AdministrationBundle\Entity\ProduitFiniNomenclature $produitFiniNomenclature)
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

    /**
     * Add etapeNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\EtapeNomenclature $etapeNomenclature
     *
     * @return VersionNomenclature
     */
    public function addEtapeNomenclature(\IC\AdministrationBundle\Entity\EtapeNomenclature $etapeNomenclature)
    {
        $this->etapeNomenclature[] = $etapeNomenclature;

        return $this;
    }

    /**
     * Remove etapeNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\EtapeNomenclature $etapeNomenclature
     */
    public function removeEtapeNomenclature(\IC\AdministrationBundle\Entity\EtapeNomenclature $etapeNomenclature)
    {
        $this->etapeNomenclature->removeElement($etapeNomenclature);
    }

    /**
     * Get etapeNomenclature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtapeNomenclature()
    {
        return $this->etapeNomenclature;
    }

    /**
     * Set nomenclature
     *
     * @param \IC\AdministrationBundle\Entity\Nomenclature $nomenclature
     *
     * @return VersionNomenclature
     */
    public function setNomenclature(\IC\AdministrationBundle\Entity\Nomenclature $nomenclature = null)
    {
        $this->nomenclature = $nomenclature;

        return $this;
    }

    /**
     * Get nomenclature
     *
     * @return \IC\AdministrationBundle\Entity\Nomenclature
     */
    public function getNomenclature()
    {
        return $this->nomenclature;
    }
}

