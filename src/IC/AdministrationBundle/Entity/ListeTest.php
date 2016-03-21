<?php

namespace IC\AdministrationBundle\Entity;

/**
 * ListeTest
 */
class ListeTest
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
     * @var \IC\AdministrationBundle\Entity\Etape
     */
    private $etape;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ListeTest
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
     * @return ListeTest
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
     * @param \IC\AdministrationBundle\Entity\Etape $etape
     *
     * @return ListeTest
     */
    public function setEtape(\IC\AdministrationBundle\Entity\Etape $etape = null)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return \IC\AdministrationBundle\Entity\Etape
     */
    public function getEtape()
    {
        return $this->etape;
    }
}

