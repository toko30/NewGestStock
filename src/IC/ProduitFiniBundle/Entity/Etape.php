<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Etape
 */
class Etape
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $test;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->test = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etape
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add test
     *
     * @param \IC\ProduitFiniBundle\Entity\Test $test
     *
     * @return Etape
     */
    public function addTest(\IC\ProduitFiniBundle\Entity\Test $test)
    {
        $this->test[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \IC\ProduitFiniBundle\Entity\Test $test
     */
    public function removeTest(\IC\ProduitFiniBundle\Entity\Test $test)
    {
        $this->test->removeElement($test);
    }

    /**
     * Get test
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTest()
    {
        return $this->test;
    }
}
