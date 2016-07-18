<?php

namespace IC\ProductionBundle\Entity;

/**
 * FicheDescriptive
 */
class FicheDescriptive
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var integer
     */
    private $frequence;

    /**
     * @var integer
     */
    private $petite;

    /**
     * @var integer
     */
    private $moyenne;

    /**
     * @var integer
     */
    private $grande;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ficheDescriptiveOption;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ficheDescriptiveOption = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return FicheDescriptive
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
     * Set designation
     *
     * @param string $designation
     *
     * @return FicheDescriptive
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set frequence
     *
     * @param integer $frequence
     *
     * @return FicheDescriptive
     */
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get frequence
     *
     * @return integer
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set petite
     *
     * @param integer $petite
     *
     * @return FicheDescriptive
     */
    public function setPetite($petite)
    {
        $this->petite = $petite;

        return $this;
    }

    /**
     * Get petite
     *
     * @return integer
     */
    public function getPetite()
    {
        return $this->petite;
    }

    /**
     * Set moyenne
     *
     * @param integer $moyenne
     *
     * @return FicheDescriptive
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return integer
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set grande
     *
     * @param integer $grande
     *
     * @return FicheDescriptive
     */
    public function setGrande($grande)
    {
        $this->grande = $grande;

        return $this;
    }

    /**
     * Get grande
     *
     * @return integer
     */
    public function getGrande()
    {
        return $this->grande;
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
     * Add ficheDescriptiveOption
     *
     * @param \IC\ProductionBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption
     *
     * @return FicheDescriptive
     */
    public function addFicheDescriptiveOption(\IC\ProductionBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption)
    {
        $this->ficheDescriptiveOption[] = $ficheDescriptiveOption;

        return $this;
    }

    /**
     * Remove ficheDescriptiveOption
     *
     * @param \IC\ProductionBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption
     */
    public function removeFicheDescriptiveOption(\IC\ProductionBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption)
    {
        $this->ficheDescriptiveOption->removeElement($ficheDescriptiveOption);
    }

    /**
     * Get ficheDescriptiveOption
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFicheDescriptiveOption()
    {
        return $this->ficheDescriptiveOption;
    }
}

