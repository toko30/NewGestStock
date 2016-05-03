<?php

namespace IC\TestBundle\Entity;

/**
 * Firmware
 */
class Firmware
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $numSerie;

    /**
     * @var integer
     */
    private $idNomenclature;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Firmware
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set numSerie
     *
     * @param integer $numSerie
     *
     * @return Firmware
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return integer
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set idNomenclature
     *
     * @param integer $idNomenclature
     *
     * @return Firmware
     */
    public function setIdNomenclature($idNomenclature)
    {
        $this->idNomenclature = $idNomenclature;

        return $this;
    }

    /**
     * Get idNomenclature
     *
     * @return integer
     */
    public function getIdNomenclature()
    {
        return $this->idNomenclature;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Firmware
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
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
