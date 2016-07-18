<?php

namespace IC\ProductionBundle\Entity;

/**
 * LecteurAutre
 */
class LecteurAutre
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var integer
     */
    private $idLecteurAutre;

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
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return LecteurAutre
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
     * Set idLecteurAutre
     *
     * @param integer $idLecteurAutre
     *
     * @return LecteurAutre
     */
    public function setIdLecteurAutre($idLecteurAutre)
    {
        $this->idLecteurAutre = $idLecteurAutre;

        return $this;
    }

    /**
     * Get idLecteurAutre
     *
     * @return integer
     */
    public function getIdLecteurAutre()
    {
        return $this->idLecteurAutre;
    }

    /**
     * Set vendu
     *
     * @param integer $vendu
     *
     * @return LecteurAutre
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
     * @return LecteurAutre
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
}

