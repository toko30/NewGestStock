<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * HistoVenteLecteurAutre
 */
class HistoVenteLecteurAutre
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
     * @return HistoVenteLecteurAutre
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
     * @return HistoVenteLecteurAutre
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
     * @return HistoVenteLecteurAutre
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
