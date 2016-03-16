<?php

namespace IC\ApprovisionnementBundle\Entity;

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
    /**
     * @var \IC\ApprovisionnementBundle\Entity\TypeLecteurAutre
     */
    private $TypeLecteurAutre;


    /**
     * Set typeLecteurAutre
     *
     * @param \IC\ApprovisionnementBundle\Entity\TypeLecteurAutre $typeLecteurAutre
     *
     * @return LecteurAutre
     */
    public function setTypeLecteurAutre(\IC\ApprovisionnementBundle\Entity\TypeLecteurAutre $typeLecteurAutre = null)
    {
        $this->TypeLecteurAutre = $typeLecteurAutre;

        return $this;
    }

    /**
     * Get typeLecteurAutre
     *
     * @return \IC\ApprovisionnementBundle\Entity\TypeLecteurAutre
     */
    public function getTypeLecteurAutre()
    {
        return $this->TypeLecteurAutre;
    }
}
