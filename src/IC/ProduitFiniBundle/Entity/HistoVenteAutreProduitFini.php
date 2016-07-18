<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * HistoVenteAutreProduitFini
 */
class HistoVenteAutreProduitFini
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var integer
     */
    private $idClient;

    /**
     * @var \DateTime
     */
    private $dateVente;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return HistoVenteAutreProduitFini
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
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return HistoVenteAutreProduitFini
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
     * Set dateVente
     *
     * @param \DateTime $dateVente
     *
     * @return HistoVenteAutreProduitFini
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
