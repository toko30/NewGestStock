<?php

namespace IC\AffichageBundle\Entity;

/**
 * OptionProduitFini
 */
class OptionProduitFini
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $abreviation;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return OptionProduitFini
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
     * Set abreviation
     *
     * @param string $abreviation
     *
     * @return OptionProduitFini
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
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
