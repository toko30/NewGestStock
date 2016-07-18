<?php

namespace IC\AffichageBundle\Entity;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lecteur;

    /**
     * @var \IC\AffichageBundle\Entity\FicheDescriptiveOption
     */
    private $ficheDescriptiveOption;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nomenclatureFicheDescriptive = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lecteur = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \IC\AffichageBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive
     *
     * @return VersionFicheDescriptive
     */
    public function addNomenclatureFicheDescriptive(\IC\AffichageBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive)
    {
        $this->nomenclatureFicheDescriptive[] = $nomenclatureFicheDescriptive;

        return $this;
    }

    /**
     * Remove nomenclatureFicheDescriptive
     *
     * @param \IC\AffichageBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive
     */
    public function removeNomenclatureFicheDescriptive(\IC\AffichageBundle\Entity\NomenclatureFicheDescriptive $nomenclatureFicheDescriptive)
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
     * Add lecteur
     *
     * @param \IC\AffichageBundle\Entity\Lecteur $lecteur
     *
     * @return VersionFicheDescriptive
     */
    public function addLecteur(\IC\AffichageBundle\Entity\Lecteur $lecteur)
    {
        $this->lecteur[] = $lecteur;

        return $this;
    }

    /**
     * Remove lecteur
     *
     * @param \IC\AffichageBundle\Entity\Lecteur $lecteur
     */
    public function removeLecteur(\IC\AffichageBundle\Entity\Lecteur $lecteur)
    {
        $this->lecteur->removeElement($lecteur);
    }

    /**
     * Get lecteur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLecteur()
    {
        return $this->lecteur;
    }

    /**
     * Set ficheDescriptiveOption
     *
     * @param \IC\AffichageBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption
     *
     * @return VersionFicheDescriptive
     */
    public function setFicheDescriptiveOption(\IC\AffichageBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption = null)
    {
        $this->ficheDescriptiveOption = $ficheDescriptiveOption;

        return $this;
    }

    /**
     * Get ficheDescriptiveOption
     *
     * @return \IC\AffichageBundle\Entity\FicheDescriptiveOption
     */
    public function getFicheDescriptiveOption()
    {
        return $this->ficheDescriptiveOption;
    }
}
