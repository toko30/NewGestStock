<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $refCompta;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
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
     * Set refCompta
     *
     * @param string $refCompta
     *
     * @return Client
     */
    public function setRefCompta($refCompta)
    {
        $this->refCompta = $refCompta;

        return $this;
    }

    /**
     * Get refCompta
     *
     * @return string
     */
    public function getRefCompta()
    {
        return $this->refCompta;
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
