<?php

namespace IC\AdministrationBundle\Entity;

/**
 * ComposantNomenclature
 */
class ComposantNomenclature
{
    /**
     * @var integer
     */
    private $idComposant;

    /**
     * @var integer
     */
    private $idVersion;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var string
     */
    private $position;

    /**
     * @var integer
     */
    private $optionSt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\AdministrationBundle\Entity\Composant
     */
    private $composant;

    /**
     * @var \IC\AdministrationBundle\Entity\VersionNomenclature
     */
    private $versionNomenclature;


    /**
     * Set idComposant
     *
     * @param integer $idComposant
     *
     * @return ComposantNomenclature
     */
    public function setIdComposant($idComposant)
    {
        $this->idComposant = $idComposant;

        return $this;
    }

    /**
     * Get idComposant
     *
     * @return integer
     */
    public function getIdComposant()
    {
        return $this->idComposant;
    }

    /**
     * Set idVersion
     *
     * @param integer $idVersion
     *
     * @return ComposantNomenclature
     */
    public function setIdVersion($idVersion)
    {
        $this->idVersion = $idVersion;

        return $this;
    }

    /**
     * Get idVersion
     *
     * @return integer
     */
    public function getIdVersion()
    {
        return $this->idVersion;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return ComposantNomenclature
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return ComposantNomenclature
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set optionSt
     *
     * @param integer $optionSt
     *
     * @return ComposantNomenclature
     */
    public function setOptionSt($optionSt)
    {
        $this->optionSt = $optionSt;

        return $this;
    }

    /**
     * Get optionSt
     *
     * @return integer
     */
    public function getOptionSt()
    {
        return $this->optionSt;
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
     * Set composant
     *
     * @param \IC\AdministrationBundle\Entity\Composant $composant
     *
     * @return ComposantNomenclature
     */
    public function setComposant(\IC\AdministrationBundle\Entity\Composant $composant = null)
    {
        $this->composant = $composant;

        return $this;
    }

    /**
     * Get composant
     *
     * @return \IC\AdministrationBundle\Entity\Composant
     */
    public function getComposant()
    {
        return $this->composant;
    }

    /**
     * Set versionNomenclature
     *
     * @param \IC\AdministrationBundle\Entity\VersionNomenclature $versionNomenclature
     *
     * @return ComposantNomenclature
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
}

