<?php

namespace IC\ProductionBundle\Entity;

/**
 * HistoVenteLecteur
 */
class HistoVenteLecteur
{
    /**
     * @var integer
     */
    private $idClient;

    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var \DateTime
     */
    private $dateVente;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return HistoVenteLecteur
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return HistoVenteLecteur
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
     * Set dateVente
     *
     * @param \DateTime $dateVente
     *
     * @return HistoVenteLecteur
     */
    public function setDateVente($dateVente)
    {
        $this->dateVente = $dateVente;

        return $this;
    }

    /**
     * Get dateVente
     *
     * @return \DateTime
     */
    public function getDateVente()
    {
        return $this->dateVente;
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

