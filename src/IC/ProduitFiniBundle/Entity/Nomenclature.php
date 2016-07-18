<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Nomenclature
 */
class Nomenclature
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versionNomenclature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versionNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Nomenclature
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
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
     * Add versionNomenclature
     *
     * @param \IC\ProduitFiniBundle\Entity\VersionNomenclature $versionNomenclature
     *
     * @return Nomenclature
     */
    public function addVersionNomenclature(\IC\ProduitFiniBundle\Entity\VersionNomenclature $versionNomenclature)
    {
        $this->versionNomenclature[] = $versionNomenclature;

        return $this;
    }

    /**
     * Remove versionNomenclature
     *
     * @param \IC\ProduitFiniBundle\Entity\VersionNomenclature $versionNomenclature
     */
    public function removeVersionNomenclature(\IC\ProduitFiniBundle\Entity\VersionNomenclature $versionNomenclature)
    {
        $this->versionNomenclature->removeElement($versionNomenclature);
    }

    /**
     * Get versionNomenclature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVersionNomenclature()
    {
        return $this->versionNomenclature;
    }
}
