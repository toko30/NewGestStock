<?php

namespace IC\ProductionBundle\Entity;

/**
 * HistoReprise
 */
class HistoReprise
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $idTest;

    /**
     * @var integer
     */
    private $repriseNb;

    /**
     * @var \DateTime
     */
    private $dateReprise;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return HistoReprise
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return HistoReprise
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
     * Set idTest
     *
     * @param integer $idTest
     *
     * @return HistoReprise
     */
    public function setIdTest($idTest)
    {
        $this->idTest = $idTest;

        return $this;
    }

    /**
     * Get idTest
     *
     * @return integer
     */
    public function getIdTest()
    {
        return $this->idTest;
    }

    /**
     * Set repriseNb
     *
     * @param integer $repriseNb
     *
     * @return HistoReprise
     */
    public function setRepriseNb($repriseNb)
    {
        $this->repriseNb = $repriseNb;

        return $this;
    }

    /**
     * Get repriseNb
     *
     * @return integer
     */
    public function getRepriseNb()
    {
        return $this->repriseNb;
    }

    /**
     * Set dateReprise
     *
     * @param \DateTime $dateReprise
     *
     * @return HistoReprise
     */
    public function setDateReprise($dateReprise)
    {
        $this->dateReprise = $dateReprise;

        return $this;
    }

    /**
     * Get dateReprise
     *
     * @return \DateTime
     */
    public function getDateReprise()
    {
        return $this->dateReprise;
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

