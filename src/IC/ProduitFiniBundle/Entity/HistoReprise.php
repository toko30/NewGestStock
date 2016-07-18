<?php

namespace IC\ProduitFiniBundle\Entity;

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
    /**
     * @var \IC\ProduitFiniBundle\Entity\Reprise
     */
    private $reprise;


    /**
     * Set reprise
     *
     * @param \IC\ProduitFiniBundle\Entity\Reprise $reprise
     *
     * @return HistoReprise
     */
    public function setReprise(\IC\ProduitFiniBundle\Entity\Reprise $reprise = null)
    {
        $this->reprise = $reprise;

        return $this;
    }

    /**
     * Get reprise
     *
     * @return \IC\ProduitFiniBundle\Entity\Reprise
     */
    public function getReprise()
    {
        return $this->reprise;
    }
    /**
     * @var \IC\ProduitFiniBundle\Entity\Test
     */
    private $test;


    /**
     * Set test
     *
     * @param \IC\ProduitFiniBundle\Entity\Test $test
     *
     * @return HistoReprise
     */
    public function setTest(\IC\ProduitFiniBundle\Entity\Test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \IC\ProduitFiniBundle\Entity\Test
     */
    public function getTest()
    {
        return $this->test;
    }
}
