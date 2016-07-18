<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * HistoPret
 */
class HistoPret
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
     * @var string
     */
    private $etat;

    /**
     * @var \DateTime
     */
    private $datePret;

    /**
     * @var \DateTime
     */
    private $dateRetour;

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
     * @return HistoPret
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
     * @return HistoPret
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
     * Set etat
     *
     * @param string $etat
     *
     * @return HistoPret
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set datePret
     *
     * @param \DateTime $datePret
     *
     * @return HistoPret
     */
    public function setDatePret($datePret)
    {
        $this->datePret = $datePret;

        return $this;
    }

    /**
     * Get datePret
     *
     * @return \DateTime
     */
    public function getDatePret()
    {
        return $this->datePret;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return HistoPret
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
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
     * @return HistoPret
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
