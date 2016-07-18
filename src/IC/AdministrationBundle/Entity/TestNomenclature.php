<?php

namespace IC\AdministrationBundle\Entity;

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
     * @var \IC\AdministrationBundle\Entity\Test
     */
    private $test;

    /**
     * @var \IC\AdministrationBundle\Entity\EtapeNomenclature
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
     * @param \IC\AdministrationBundle\Entity\Test $test
     *
     * @return TestNomenclature
     */
    public function setTest(\IC\AdministrationBundle\Entity\Test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \IC\AdministrationBundle\Entity\Test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set etapeNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\EtapeNomenclature $etapeNomenclature
     *
     * @return TestNomenclature
     */
    public function setEtapeNomenclature(\IC\AdministrationBundle\Entity\EtapeNomenclature $etapeNomenclature = null)
    {
        $this->etapeNomenclature = $etapeNomenclature;

        return $this;
    }

    /**
     * Get etapeNomenclature
     *
     * @return \IC\AdministrationBundle\Entity\EtapeNomenclature
     */
    public function getEtapeNomenclature()
    {
        return $this->etapeNomenclature;
    }
}
