<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Pret
 */
class Pret
{
    /**
     * @var integer
     */
    private $idClient;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var integer
     */
    private $idVersionFicheDescriptive;

    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var string
     */
    private $remarque;

    /**
     * @var \DateTime
     */
    private $dateEnvoi;

    /**
     * @var \DateTime
     */
    private $dateReception;

    /**
     * @var integer
     */
    private $etat;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\ProduitFiniBundle\Entity\Client
     */
    private $client;

    /**
     * @var \IC\ProduitFiniBundle\Entity\VersionFicheDescriptive
     */
    private $versionFicheDescriptive;


    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Pret
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
     * Set contact
     *
     * @param string $contact
     *
     * @return Pret
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set idVersionFicheDescriptive
     *
     * @param integer $idVersionFicheDescriptive
     *
     * @return Pret
     */
    public function setIdVersionFicheDescriptive($idVersionFicheDescriptive)
    {
        $this->idVersionFicheDescriptive = $idVersionFicheDescriptive;

        return $this;
    }

    /**
     * Get idVersionFicheDescriptive
     *
     * @return integer
     */
    public function getIdVersionFicheDescriptive()
    {
        return $this->idVersionFicheDescriptive;
    }

    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return Pret
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
     * Set remarque
     *
     * @param string $remarque
     *
     * @return Pret
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Pret
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set dateReception
     *
     * @param \DateTime $dateReception
     *
     * @return Pret
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Pret
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
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
     * @return Pret
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

    /**
     * Set versionFicheDescriptive
     *
     * @param \IC\ProduitFiniBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive
     *
     * @return Pret
     */
    public function setVersionFicheDescriptive(\IC\ProduitFiniBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive = null)
    {
        $this->versionFicheDescriptive = $versionFicheDescriptive;

        return $this;
    }

    /**
     * Get versionFicheDescriptive
     *
     * @return \IC\ProduitFiniBundle\Entity\VersionFicheDescriptive
     */
    public function getVersionFicheDescriptive()
    {
        return $this->versionFicheDescriptive;
    }
}
