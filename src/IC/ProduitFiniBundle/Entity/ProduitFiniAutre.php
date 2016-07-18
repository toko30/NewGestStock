<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * ProduitFiniAutre
 */
class ProduitFiniAutre
{
    /**
     * @var integer
     */
    private $idAutre;

    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var integer
     */
    private $vendu;

    /**
     * @var \DateTime
     */
    private $dateAjout;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\ProduitFiniBundle\Entity\Autre
     */
    private $autre;


    /**
     * Set idAutre
     *
     * @param integer $idAutre
     *
     * @return ProduitFiniAutre
     */
    public function setIdAutre($idAutre)
    {
        $this->idAutre = $idAutre;

        return $this;
    }

    /**
     * Get idAutre
     *
     * @return integer
     */
    public function getIdAutre()
    {
        return $this->idAutre;
    }

    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return ProduitFiniAutre
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
     * Set vendu
     *
     * @param integer $vendu
     *
     * @return ProduitFiniAutre
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;

        return $this;
    }

    /**
     * Get vendu
     *
     * @return integer
     */
    public function getVendu()
    {
        return $this->vendu;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return ProduitFiniAutre
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
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
     * Set autre
     *
     * @param \IC\ProduitFiniBundle\Entity\Autre $autre
     *
     * @return ProduitFiniAutre
     */
    public function setAutre(\IC\ProduitFiniBundle\Entity\Autre $autre = null)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return \IC\ProduitFiniBundle\Entity\Autre
     */
    public function getAutre()
    {
        return $this->autre;
    }
}
