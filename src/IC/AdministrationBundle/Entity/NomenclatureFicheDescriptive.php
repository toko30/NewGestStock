<?php

namespace IC\AdministrationBundle\Entity;

/**
 * NomenclatureFicheDescriptive
 */
class NomenclatureFicheDescriptive
{
    /**
     * @var integer
     */
    private $idVersionFicheDescriptive;

    /**
     * @var integer
     */
    private $idVersionNomenclature;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\AdministrationBundle\Entity\VersionNomenclature
     */
    private $versionNomenclature;

    /**
     * @var \IC\AdministrationBundle\Entity\VersionFicheDescriptive
     */
    private $versionFicheDescriptive;


    /**
     * Set idVersionFicheDescriptive
     *
     * @param integer $idVersionFicheDescriptive
     *
     * @return NomenclatureFicheDescriptive
     */
    public function setIdVersionFicheDescriptive($idVersionFicheDescriptive)
    {
        $this->idVersionFicheDescriptive = $idVersionFicheDescriptive;

        return $this;
    }

    /**
     * Get idVersionFicheDescriptive
     *
     * @return integer
     */
    public function getIdVersionFicheDescriptive()
    {
        return $this->idVersionFicheDescriptive;
    }

    /**
     * Set idVersionNomenclature
     *
     * @param integer $idVersionNomenclature
     *
     * @return NomenclatureFicheDescriptive
     */
    public function setIdVersionNomenclature($idVersionNomenclature)
    {
        $this->idVersionNomenclature = $idVersionNomenclature;

        return $this;
    }

    /**
     * Get idVersionNomenclature
     *
     * @return integer
     */
    public function getIdVersionNomenclature()
    {
        return $this->idVersionNomenclature;
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
     * Set versionNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature
     *
     * @return NomenclatureFicheDescriptive
     */
    public function setVersionNomenclature(\IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature = null)
    {
        $this->versionNomenclature = $versionNomenclature;

        return $this;
    }

    /**
     * Get versionNomenclature
     *
     * @return \IC\AdministrationBundle\Entity\VersionNomenclature
     */
    public function getVersionNomenclature()
    {
        return $this->versionNomenclature;
    }

    /**
     * Set versionFicheDescriptive
     *
     * @param \IC\AdministrationBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive
     *
     * @return NomenclatureFicheDescriptive
     */
    public function setVersionFicheDescriptive(\IC\AdministrationBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive = null)
    {
        $this->versionFicheDescriptive = $versionFicheDescriptive;

        return $this;
    }

    /**
     * Get versionFicheDescriptive
     *
     * @return \IC\AdministrationBundle\Entity\VersionFicheDescriptive
     */
    public function getVersionFicheDescriptive()
    {
        return $this->versionFicheDescriptive;
    }
}
