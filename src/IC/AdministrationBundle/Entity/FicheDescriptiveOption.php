<?php

namespace IC\AdministrationBundle\Entity;

/**
 * FicheDescriptiveOption
 */
class FicheDescriptiveOption
{
    /**
     * @var integer
     */
    private $idFicheDescriptive;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\AdministrationBundle\Entity\SousTypeLecteur
     */
    private $sousTypeLecteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versionFicheDescriptive;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $optionFicheDescriptive;

    /**
     * @var \IC\AdministrationBundle\Entity\FicheDescriptive
     */
    private $ficheDescriptive;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versionFicheDescriptive = new \Doctrine\Common\Collections\ArrayCollection();
        $this->optionFicheDescriptive = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idFicheDescriptive
     *
     * @param integer $idFicheDescriptive
     *
     * @return FicheDescriptiveOption
     */
    public function setIdFicheDescriptive($idFicheDescriptive)
    {
        $this->idFicheDescriptive = $idFicheDescriptive;

        return $this;
    }

    /**
     * Get idFicheDescriptive
     *
     * @return integer
     */
    public function getIdFicheDescriptive()
    {
        return $this->idFicheDescriptive;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return FicheDescriptiveOption
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
     * Set type
     *
     * @param integer $type
     *
     * @return FicheDescriptiveOption
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
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
     * Set sousTypeLecteur
     *
     * @param \IC\AdministrationBundle\Entity\SousTypeLecteur $sousTypeLecteur
     *
     * @return FicheDescriptiveOption
     */
    public function setSousTypeLecteur(\IC\AdministrationBundle\Entity\SousTypeLecteur $sousTypeLecteur = null)
    {
        $this->sousTypeLecteur = $sousTypeLecteur;

        return $this;
    }

    /**
     * Get sousTypeLecteur
     *
     * @return \IC\AdministrationBundle\Entity\SousTypeLecteur
     */
    public function getSousTypeLecteur()
    {
        return $this->sousTypeLecteur;
    }

    /**
     * Add versionFicheDescriptive
     *
     * @param \IC\AdministrationBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive
     *
     * @return FicheDescriptiveOption
     */
    public function addVersionFicheDescriptive(\IC\AdministrationBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive)
    {
        $this->versionFicheDescriptive[] = $versionFicheDescriptive;

        return $this;
    }

    /**
     * Remove versionFicheDescriptive
     *
     * @param \IC\AdministrationBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive
     */
    public function removeVersionFicheDescriptive(\IC\AdministrationBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive)
    {
        $this->versionFicheDescriptive->removeElement($versionFicheDescriptive);
    }

    /**
     * Get versionFicheDescriptive
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVersionFicheDescriptive()
    {
        return $this->versionFicheDescriptive;
    }

    /**
     * Add optionFicheDescriptive
     *
     * @param \IC\AdministrationBundle\Entity\OptionFicheDescriptive $optionFicheDescriptive
     *
     * @return FicheDescriptiveOption
     */
    public function addOptionFicheDescriptive(\IC\AdministrationBundle\Entity\OptionFicheDescriptive $optionFicheDescriptive)
    {
        $this->optionFicheDescriptive[] = $optionFicheDescriptive;

        return $this;
    }

    /**
     * Remove optionFicheDescriptive
     *
     * @param \IC\AdministrationBundle\Entity\OptionFicheDescriptive $optionFicheDescriptive
     */
    public function removeOptionFicheDescriptive(\IC\AdministrationBundle\Entity\OptionFicheDescriptive $optionFicheDescriptive)
    {
        $this->optionFicheDescriptive->removeElement($optionFicheDescriptive);
    }

    /**
     * Get optionFicheDescriptive
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOptionFicheDescriptive()
    {
        return $this->optionFicheDescriptive;
    }

    /**
     * Set ficheDescriptive
     *
     * @param \IC\AdministrationBundle\Entity\FicheDescriptive $ficheDescriptive
     *
     * @return FicheDescriptiveOption
     */
    public function setFicheDescriptive(\IC\AdministrationBundle\Entity\FicheDescriptive $ficheDescriptive = null)
    {
        $this->ficheDescriptive = $ficheDescriptive;

        return $this;
    }

    /**
     * Get ficheDescriptive
     *
     * @return \IC\AdministrationBundle\Entity\FicheDescriptive
     */
    public function getFicheDescriptive()
    {
        return $this->ficheDescriptive;
    }
}

