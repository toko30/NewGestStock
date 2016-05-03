<?php

namespace IC\TestBundle\Entity;

/**
 * VersionFicheDescriptive
 */
class VersionFicheDescriptive
{
    /**
     * @var integer
     */
    private $idFicheDescriptiveOption;

    /**
     * @var integer
     */
    private $version;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nomenclatureFicheDescriptive;

    /**
     * @var \IC\TestBundle\Entity\FicheDescriptiveOption
     */
    private $ficheDescriptiveOption;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nomenclatureFicheDescriptive = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idFicheDescriptiveOption
     *
     * @param integer $idFicheDescriptiveOption
     *
     * @return VersionFicheDescriptive
     */
    public function setIdFicheDescriptiveOption($idFicheDescriptiveOption)
    {
        $this->idFicheDescriptiveOption = $idFicheDescriptiveOption;

        return $this;
    }

    /**
     * Get idFicheDescriptiveOption
     *
     * @return integer
     */
    public function getIdFicheDescriptiveOption()
    {
        return $this->idFicheDescriptiveOption;
    }

    /**
     * Set version
     *
     * @param integer $version
     *
     * @return VersionFicheDescriptive
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
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
     * Add nomenclatureFicheDescriptive
     *
     * @param \IC\TestBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive
     *
     * @return VersionFicheDescriptive
     */
    public function addNomenclatureFicheDescriptive(\IC\TestBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive)
    {
        $this->nomenclatureFicheDescriptive[] = $nomenclatureFicheDescriptive;

        return $this;
    }

    /**
     * Remove nomenclatureFicheDescriptive
     *
     * @param \IC\TestBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive
     */
    public function removeNomenclatureFicheDescriptive(\IC\TestBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive)
    {
        $this->nomenclatureFicheDescriptive->removeElement($nomenclatureFicheDescriptive);
    }

    /**
     * Get nomenclatureFicheDescriptive
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNomenclatureFicheDescriptive()
    {
        return $this->nomenclatureFicheDescriptive;
    }

    /**
     * Set ficheDescriptiveOption
     *
     * @param \IC\TestBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption
     *
     * @return VersionFicheDescriptive
     */
    public function setFicheDescriptiveOption(\IC\TestBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption = null)
    {
        $this->ficheDescriptiveOption = $ficheDescriptiveOption;

        return $this;
    }

    /**
     * Get ficheDescriptiveOption
     *
     * @return \IC\TestBundle\Entity\FicheDescriptiveOption
     */
    public function getFicheDescriptiveOption()
    {
        return $this->ficheDescriptiveOption;
    }
}
