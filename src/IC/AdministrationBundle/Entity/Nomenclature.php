<?php

namespace IC\AdministrationBundle\Entity;

/**
 * Nomenclature
 */
class Nomenclature
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
     * @var \IC\AdministrationBundle\Entity\TypeLecteur
     */
    private $typeLecteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versionNomenclature;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $firmware;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versionNomenclature = new \Doctrine\Common\Collections\ArrayCollection();
        $this->firmware = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Nomenclature
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
     * Set typeLecteur
     *
     * @param \IC\AdministrationBundle\Entity\TypeLecteur $typeLecteur
     *
     * @return Nomenclature
     */
    public function setTypeLecteur(\IC\AdministrationBundle\Entity\TypeLecteur $typeLecteur = null)
    {
        $this->typeLecteur = $typeLecteur;

        return $this;
    }

    /**
     * Get typeLecteur
     *
     * @return \IC\AdministrationBundle\Entity\TypeLecteur
     */
    public function getTypeLecteur()
    {
        return $this->typeLecteur;
    }

    /**
     * Add versionNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature
     *
     * @return Nomenclature
     */
    public function addVersionNomenclature(\IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature)
    {
        $this->versionNomenclature[] = $versionNomenclature;

        return $this;
    }

    /**
     * Remove versionNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature
     */
    public function removeVersionNomenclature(\IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature)
    {
        $this->versionNomenclature->removeElement($versionNomenclature);
    }

    /**
     * Get versionNomenclature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVersionNomenclature()
    {
        return $this->versionNomenclature;
    }

    /**
     * Add firmware
     *
     * @param \IC\AdministrationBundle\Entity\Firmware $firmware
     *
     * @return Nomenclature
     */
    public function addFirmware(\IC\AdministrationBundle\Entity\Firmware $firmware)
    {
        $this->firmware[] = $firmware;

        return $this;
    }

    /**
     * Remove firmware
     *
     * @param \IC\AdministrationBundle\Entity\Firmware $firmware
     */
    public function removeFirmware(\IC\AdministrationBundle\Entity\Firmware $firmware)
    {
        $this->firmware->removeElement($firmware);
    }

    /**
     * Get firmware
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFirmware()
    {
        return $this->firmware;
    }
}

