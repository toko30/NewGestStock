<?php

namespace IC\TestBundle\Entity;

/**
 * EtapeNomenclature
 */
class EtapeNomenclature
{
    /**
     * @var integer
     */
    private $idVersionNomenclature;

    /**
     * @var integer
     */
    private $idEtape;

    /**
     * @var integer
     */
    private $ordre;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\TestBundle\Entity\Etape
     */
    private $etape;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $testNomenclature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->testNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idVersionNomenclature
     *
     * @param integer $idVersionNomenclature
     *
     * @return EtapeNomenclature
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
     * Set idEtape
     *
     * @param integer $idEtape
     *
     * @return EtapeNomenclature
     */
    public function setIdEtape($idEtape)
    {
        $this->idEtape = $idEtape;

        return $this;
    }

    /**
     * Get idEtape
     *
     * @return integer
     */
    public function getIdEtape()
    {
        return $this->idEtape;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return EtapeNomenclature
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
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
     * Set etape
     *
     * @param \IC\TestBundle\Entity\Etape $etape
     *
     * @return EtapeNomenclature
     */
    public function setEtape(\IC\TestBundle\Entity\Etape $etape = null)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return \IC\TestBundle\Entity\Etape
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Add testNomenclature
     *
     * @param \IC\TestBundle\Entity\TestNomenclature $testNomenclature
     *
     * @return EtapeNomenclature
     */
    public function addTestNomenclature(\IC\TestBundle\Entity\TestNomenclature $testNomenclature)
    {
        $this->testNomenclature[] = $testNomenclature;

        return $this;
    }

    /**
     * Remove testNomenclature
     *
     * @param \IC\TestBundle\Entity\TestNomenclature $testNomenclature
     */
    public function removeTestNomenclature(\IC\TestBundle\Entity\TestNomenclature $testNomenclature)
    {
        $this->testNomenclature->removeElement($testNomenclature);
    }

    /**
     * Get testNomenclature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTestNomenclature()
    {
        return $this->testNomenclature;
    }
}
