<?php

namespace IC\AffichageBundle\Entity;

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
    private $id;

    /**
     * @var \IC\AffichageBundle\Entity\TypeLecteurAutre
     */
    private $typeLecteurAutre;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeLecteurAutre
     *
     * @param \IC\AffichageBundle\Entity\TypeLecteurAutre $typeLecteurAutre
     *
     * @return LecteurAutre
     */
    public function setTypeLecteurAutre(\IC\AffichageBundle\Entity\TypeLecteurAutre $typeLecteurAutre = null)
    {
        $this->typeLecteurAutre = $typeLecteurAutre;

        return $this;
    }

    /**
     * Get typeLecteurAutre
     *
     * @return \IC\AffichageBundle\Entity\TypeLecteurAutre
     */
    public function getTypeLecteurAutre()
    {
        return $this->typeLecteurAutre;
    }
    /**
     * @var integer
     */
    private $vendu;

    /**
     * @var \DateTime
     */
    private $dateAjout;


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
}
