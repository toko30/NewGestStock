<?php

namespace IC\TestBundle\Entity;

/**
 * Lot
 */
class Lot
{
    /**
     * @var integer
     */
    private $idNomenclature;

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
    private $idVersionFicheDescriptive;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\TestBundle\Entity\VersionNomenclature
     */
    private $versionNomenclature;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $carteTest;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reprise;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carteTest = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reprise = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idNomenclature
     *
     * @param integer $idNomenclature
     *
     * @return Lot
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
     * Set idVersionFicheDescriptive
     *
     * @param integer $idVersionFicheDescriptive
     *
     * @return Lot
     */
    public function setIdVersionFicheDescriptive($idVersionFicheDescriptive)
    {
        $this->idVersionFicheDescriptive = $idVersionFicheDescriptive;

        return $this;
    }

    /**
     * Get idVersionFicheDescriptive
     *
     * @return integer
     */
    public function getIdVersionFicheDescriptive()
    {
        return $this->idVersionFicheDescriptive;
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
     * Set versionNomenclature
     *
     * @param \IC\TestBundle\Entity\VersionNomenclature $versionNomenclature
     *
     * @return Lot
     */
    public function setVersionNomenclature(\IC\TestBundle\Entity\VersionNomenclature $versionNomenclature = null)
    {
        $this->versionNomenclature = $versionNomenclature;

        return $this;
    }

    /**
     * Get versionNomenclature
     *
     * @return \IC\TestBundle\Entity\VersionNomenclature
     */
    public function getVersionNomenclature()
    {
        return $this->versionNomenclature;
    }

    /**
     * Add carteTest
     *
     * @param \IC\TestBundle\Entity\CarteTest $carteTest
     *
     * @return Lot
     */
    public function addCarteTest(\IC\TestBundle\Entity\CarteTest $carteTest)
    {
        $this->carteTest[] = $carteTest;

        return $this;
    }

    /**
     * Remove carteTest
     *
     * @param \IC\TestBundle\Entity\CarteTest $carteTest
     */
    public function removeCarteTest(\IC\TestBundle\Entity\CarteTest $carteTest)
    {
        $this->carteTest->removeElement($carteTest);
    }

    /**
     * Get carteTest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarteTest()
    {
        return $this->carteTest;
    }

    /**
     * Add reprise
     *
     * @param \IC\TestBundle\Entity\Reprise $reprise
     *
     * @return Lot
     */
    public function addReprise(\IC\TestBundle\Entity\Reprise $reprise)
    {
        $this->reprise[] = $reprise;

        return $this;
    }

    /**
     * Remove reprise
     *
     * @param \IC\TestBundle\Entity\Reprise $reprise
     */
    public function removeReprise(\IC\TestBundle\Entity\Reprise $reprise)
    {
        $this->reprise->removeElement($reprise);
    }

    /**
     * Get reprise
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReprise()
    {
        return $this->reprise;
    }
}
