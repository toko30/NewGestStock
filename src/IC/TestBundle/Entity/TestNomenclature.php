<?php

namespace IC\TestBundle\Entity;

/**
 * TestNomenclature
 */
class TestNomenclature
{
    /**
     * @var integer
     */
    private $idEtapeNomenclature;

    /**
     * @var integer
     */
    private $idTest;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\TestBundle\Entity\Test
     */
    private $test;

    /**
     * @var \IC\TestBundle\Entity\EtapeNomenclature
     */
    private $etapeNomenclature;


    /**
     * Set idEtapeNomenclature
     *
     * @param integer $idEtapeNomenclature
     *
     * @return TestNomenclature
     */
    public function setIdEtapeNomenclature($idEtapeNomenclature)
    {
        $this->idEtapeNomenclature = $idEtapeNomenclature;

        return $this;
    }

    /**
     * Get idEtapeNomenclature
     *
     * @return integer
     */
    public function getIdEtapeNomenclature()
    {
        return $this->idEtapeNomenclature;
    }

    /**
     * Set idTest
     *
     * @param integer $idTest
     *
     * @return TestNomenclature
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set test
     *
     * @param \IC\TestBundle\Entity\Test $test
     *
     * @return TestNomenclature
     */
    public function setTest(\IC\TestBundle\Entity\Test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \IC\TestBundle\Entity\Test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set etapeNomenclature
     *
     * @param \IC\TestBundle\Entity\EtapeNomenclature $etapeNomenclature
     *
     * @return TestNomenclature
     */
    public function setEtapeNomenclature(\IC\TestBundle\Entity\EtapeNomenclature $etapeNomenclature = null)
    {
        $this->etapeNomenclature = $etapeNomenclature;

        return $this;
    }

    /**
     * Get etapeNomenclature
     *
     * @return \IC\TestBundle\Entity\EtapeNomenclature
     */
    public function getEtapeNomenclature()
    {
        return $this->etapeNomenclature;
    }
}
