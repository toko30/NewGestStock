<?php

namespace IC\TestBundle\Entity;

/**
 * Composant
 */
class Composant
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $boitier;

    /**
     * @var integer
     */
    private $stockInterne;

    /**
     * @var integer
     */
    private $stockMini;

    /**
     * @var integer
     */
    private $idFamille;

    /**
     * @var integer
     */
    private $idSousFamille;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Composant
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
     * Set info
     *
     * @param string $info
     *
     * @return Composant
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set boitier
     *
     * @param string $boitier
     *
     * @return Composant
     */
    public function setBoitier($boitier)
    {
        $this->boitier = $boitier;

        return $this;
    }

    /**
     * Get boitier
     *
     * @return string
     */
    public function getBoitier()
    {
        return $this->boitier;
    }

    /**
     * Set stockInterne
     *
     * @param integer $stockInterne
     *
     * @return Composant
     */
    public function setStockInterne($stockInterne)
    {
        $this->stockInterne = $stockInterne;

        return $this;
    }

    /**
     * Get stockInterne
     *
     * @return integer
     */
    public function getStockInterne()
    {
        return $this->stockInterne;
    }

    /**
     * Set stockMini
     *
     * @param integer $stockMini
     *
     * @return Composant
     */
    public function setStockMini($stockMini)
    {
        $this->stockMini = $stockMini;

        return $this;
    }

    /**
     * Get stockMini
     *
     * @return integer
     */
    public function getStockMini()
    {
        return $this->stockMini;
    }

    /**
     * Set idFamille
     *
     * @param integer $idFamille
     *
     * @return Composant
     */
    public function setIdFamille($idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

    /**
     * Get idFamille
     *
     * @return integer
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     * Set idSousFamille
     *
     * @param integer $idSousFamille
     *
     * @return Composant
     */
    public function setIdSousFamille($idSousFamille)
    {
        $this->idSousFamille = $idSousFamille;

        return $this;
    }

    /**
     * Get idSousFamille
     *
     * @return integer
     */
    public function getIdSousFamille()
    {
        return $this->idSousFamille;
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
