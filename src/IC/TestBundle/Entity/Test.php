<?php

namespace IC\TestBundle\Entity;

/**
 * Test
 */
class Test
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $idEtape;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\TestBundle\Entity\Etape
     */
    private $etape;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Test
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
     * Set idEtape
     *
     * @param integer $idEtape
     *
     * @return Test
     */
    public function setIdEtape($idEtape)
    {
        $this->idEtape = $idEtape;

        return $this;
    }

    /**
     * Get idEtape
     *
     * @return integer
     */
    public function getIdEtape()
    {
        return $this->idEtape;
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
     * Set etape
     *
     * @param \IC\TestBundle\Entity\Etape $etape
     *
     * @return Test
     */
    public function setEtape(\IC\TestBundle\Entity\Etape $etape = null)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return \IC\TestBundle\Entity\Etape
     */
    public function getEtape()
    {
        return $this->etape;
    }
}
