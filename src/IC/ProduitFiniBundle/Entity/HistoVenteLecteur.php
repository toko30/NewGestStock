<?php

namespace IC\ProduitFiniBundle\Entity;

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
     * @var \IC\ProduitFiniBundle\Entity\Client
     */
    private $client;


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

    /**
     * Set client
     *
     * @param \IC\ProduitFiniBundle\Entity\Client $client
     *
     * @return HistoVenteLecteur
     */
    public function setClient(\IC\ProduitFiniBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \IC\ProduitFiniBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
