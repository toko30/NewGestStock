<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * HistoVenteBadge
 */
class HistoVenteBadge
{
    /**
     * @var integer
     */
    private $idClient;

    /**
     * @var integer
     */
    private $idTypeBadge;

    /**
     * @var integer
     */
    private $quantite;

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
     * @return HistoVenteBadge
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
     * Set idTypeBadge
     *
     * @param integer $idTypeBadge
     *
     * @return HistoVenteBadge
     */
    public function setIdTypeBadge($idTypeBadge)
    {
        $this->idTypeBadge = $idTypeBadge;

        return $this;
    }

    /**
     * Get idTypeBadge
     *
     * @return integer
     */
    public function getIdTypeBadge()
    {
        return $this->idTypeBadge;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return HistoVenteBadge
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
     * Set dateVente
     *
     * @param \DateTime $dateVente
     *
     * @return HistoVenteBadge
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
