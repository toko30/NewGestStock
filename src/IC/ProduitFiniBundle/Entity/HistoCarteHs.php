<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * HistoCarteHs
 */
class HistoCarteHs
{
    /**
     * @var integer
     */
    private $idVersionNomenclature;

    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var \DateTime
     */
    private $dateAjout;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idVersionNomenclature
     *
     * @param integer $idVersionNomenclature
     *
     * @return HistoCarteHs
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
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return HistoCarteHs
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
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return HistoCarteHs
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
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
