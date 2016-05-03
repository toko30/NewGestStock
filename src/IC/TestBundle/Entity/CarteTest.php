<?php

namespace IC\TestBundle\Entity;

/**
 * CarteTest
 */
class CarteTest
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var string
     */
    private $numSerieProduitFini;

    /**
     * @var integer
     */
    private $idLot;

    /**
     * @var integer
     */
    private $idFirmware;

    /**
     * @var integer
     */
    private $etape;

    /**
     * @var boolean
     */
    private $assemble;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\TestBundle\Entity\Lot
     */
    private $lot;


    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return CarteTest
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
     * Set numSerieProduitFini
     *
     * @param string $numSerieProduitFini
     *
     * @return CarteTest
     */
    public function setNumSerieProduitFini($numSerieProduitFini)
    {
        $this->numSerieProduitFini = $numSerieProduitFini;

        return $this;
    }

    /**
     * Get numSerieProduitFini
     *
     * @return string
     */
    public function getNumSerieProduitFini()
    {
        return $this->numSerieProduitFini;
    }

    /**
     * Set idLot
     *
     * @param integer $idLot
     *
     * @return CarteTest
     */
    public function setIdLot($idLot)
    {
        $this->idLot = $idLot;

        return $this;
    }

    /**
     * Get idLot
     *
     * @return integer
     */
    public function getIdLot()
    {
        return $this->idLot;
    }

    /**
     * Set idFirmware
     *
     * @param integer $idFirmware
     *
     * @return CarteTest
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
     * Set etape
     *
     * @param integer $etape
     *
     * @return CarteTest
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return integer
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Set assemble
     *
     * @param boolean $assemble
     *
     * @return CarteTest
     */
    public function setAssemble($assemble)
    {
        $this->assemble = $assemble;

        return $this;
    }

    /**
     * Get assemble
     *
     * @return boolean
     */
    public function getAssemble()
    {
        return $this->assemble;
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
     * Set lot
     *
     * @param \IC\TestBundle\Entity\Lot $lot
     *
     * @return CarteTest
     */
    public function setLot(\IC\TestBundle\Entity\Lot $lot = null)
    {
        $this->lot = $lot;

        return $this;
    }

    /**
     * Get lot
     *
     * @return \IC\TestBundle\Entity\Lot
     */
    public function getLot()
    {
        return $this->lot;
    }
}
