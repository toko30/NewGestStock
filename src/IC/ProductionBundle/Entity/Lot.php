<?php

namespace IC\ProductionBundle\Entity;

/**
 * Lot
 */
class Lot
{
    /**
     * @var integer
     */
    private $idVersionNomenclature;

    /**
     * @var integer
     */
    private $IdversionFicheDescriptive;

    /**
     * @var \DateTime
     */
    private $dateProd;

    /**
     * @var \DateTime
     */
    private $dateTest;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\ProductionBundle\Entity\VersionFicheDescriptive
     */
    private $versionFicheDescriptive;


    /**
     * Set idVersionNomenclature
     *
     * @param integer $idVersionNomenclature
     *
     * @return Lot
     */
    public function setIdVersionNomenclature($idVersionNomenclature)
    {
        $this->idVersionNomenclature = $idVersionNomenclature;

        return $this;
    }

    /**
     * Get idVersionNomenclature
     *
     * @return integer
     */
    public function getIdVersionNomenclature()
    {
        return $this->idVersionNomenclature;
    }

    /**
     * Set idversionFicheDescriptive
     *
     * @param integer $idversionFicheDescriptive
     *
     * @return Lot
     */
    public function setIdversionFicheDescriptive($idversionFicheDescriptive)
    {
        $this->IdversionFicheDescriptive = $idversionFicheDescriptive;

        return $this;
    }

    /**
     * Get idversionFicheDescriptive
     *
     * @return integer
     */
    public function getIdversionFicheDescriptive()
    {
        return $this->IdversionFicheDescriptive;
    }

    /**
     * Set dateProd
     *
     * @param \DateTime $dateProd
     *
     * @return Lot
     */
    public function setDateProd($dateProd)
    {
        $this->dateProd = $dateProd;

        return $this;
    }

    /**
     * Get dateProd
     *
     * @return \DateTime
     */
    public function getDateProd()
    {
        return $this->dateProd;
    }

    /**
     * Set dateTest
     *
     * @param \DateTime $dateTest
     *
     * @return Lot
     */
    public function setDateTest($dateTest)
    {
        $this->dateTest = $dateTest;

        return $this;
    }

    /**
     * Get dateTest
     *
     * @return \DateTime
     */
    public function getDateTest()
    {
        return $this->dateTest;
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
     * Set versionFicheDescriptive
     *
     * @param \IC\ProductionBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive
     *
     * @return Lot
     */
    public function setVersionFicheDescriptive(\IC\ProductionBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive = null)
    {
        $this->versionFicheDescriptive = $versionFicheDescriptive;

        return $this;
    }

    /**
     * Get versionFicheDescriptive
     *
     * @return \IC\ProductionBundle\Entity\VersionFicheDescriptive
     */
    public function getVersionFicheDescriptive()
    {
        return $this->versionFicheDescriptive;
    }
}
