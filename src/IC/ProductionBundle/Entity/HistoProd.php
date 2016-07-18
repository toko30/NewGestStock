<?php

namespace IC\ProductionBundle\Entity;

/**
 * HistoProd
 */
class HistoProd
{
    /**
     * @var integer
     */
    private $idVersion;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var \DateTime
     */
    private $dateProd;

    /**
     * @var integer
     */
    private $lieu;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idVersion
     *
     * @param integer $idVersion
     *
     * @return HistoProd
     */
    public function setIdVersion($idVersion)
    {
        $this->idVersion = $idVersion;

        return $this;
    }

    /**
     * Get idVersion
     *
     * @return integer
     */
    public function getIdVersion()
    {
        return $this->idVersion;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return HistoProd
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set dateProd
     *
     * @param \DateTime $dateProd
     *
     * @return HistoProd
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
     * Set lieu
     *
     * @param integer $lieu
     *
     * @return HistoProd
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return integer
     */
    public function getLieu()
    {
        return $this->lieu;
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

