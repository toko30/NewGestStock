<?php

namespace IC\AdministrationBundle\Entity;

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
    private $listeTest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeTest = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add listeTest
     *
     * @param \IC\AdministrationBundle\Entity\listeTest $listeTest
     *
     * @return Etape
     */
    public function addListeTest(\IC\AdministrationBundle\Entity\listeTest $listeTest)
    {
        $this->listeTest[] = $listeTest;

        return $this;
    }

    /**
     * Remove listeTest
     *
     * @param \IC\AdministrationBundle\Entity\listeTest $listeTest
     */
    public function removeListeTest(\IC\AdministrationBundle\Entity\listeTest $listeTest)
    {
        $this->listeTest->removeElement($listeTest);
    }

    /**
     * Get listeTest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeTest()
    {
        return $this->listeTest;
    }
}

