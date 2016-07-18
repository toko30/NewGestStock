<?php

namespace IC\ProductionBundle\Entity;

/**
 * NomenclatureLecteur
 */
class NomenclatureLecteur
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var integer
     */
    private $idVersionNomenclature;

    /**
     * @var integer
     */
    private $idLecteur;

    /**
     * @var integer
     */
    private $idFirmware;

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
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return NomenclatureLecteur
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return string
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set idVersionNomenclature
     *
     * @param integer $idVersionNomenclature
     *
     * @return NomenclatureLecteur
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
     * Set idLecteur
     *
     * @param integer $idLecteur
     *
     * @return NomenclatureLecteur
     */
    public function setIdLecteur($idLecteur)
    {
        $this->idLecteur = $idLecteur;

        return $this;
    }

    /**
     * Get idLecteur
     *
     * @return integer
     */
    public function getIdLecteur()
    {
        return $this->idLecteur;
    }

    /**
     * Set idFirmware
     *
     * @param integer $idFirmware
     *
     * @return NomenclatureLecteur
     */
    public function setIdFirmware($idFirmware)
    {
        $this->idFirmware = $idFirmware;

        return $this;
    }

    /**
     * Get idFirmware
     *
     * @return integer
     */
    public function getIdFirmware()
    {
        return $this->idFirmware;
    }

    /**
     * Set dateProd
     *
     * @param \DateTime $dateProd
     *
     * @return NomenclatureLecteur
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
     * @return NomenclatureLecteur
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
}

