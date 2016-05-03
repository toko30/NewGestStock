<?php

namespace IC\TestBundle\Entity;

/**
 * CarteHs
 */
class CarteHs
{
    /**
     * @var integer
     */
    private $idLot;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idLot
     *
     * @param integer $idLot
     *
     * @return CarteHs
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return CarteHs
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
