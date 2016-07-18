<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Lecteur
 */
class Lecteur
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var integer
     */
    private $idLecteur;

    /**
     * @var integer
     */
    private $vendu;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\ProduitFiniBundle\Entity\VersionFicheDescriptive
     */
    private $versionFicheDescriptive;


    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return Lecteur
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return string
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set idLecteur
     *
     * @param integer $idLecteur
     *
     * @return Lecteur
     */
    public function setIdLecteur($idLecteur)
    {
        $this->idLecteur = $idLecteur;

        return $this;
    }

    /**
     * Get idLecteur
     *
     * @return integer
     */
    public function getIdLecteur()
    {
        return $this->idLecteur;
    }

    /**
     * Set vendu
     *
     * @param integer $vendu
     *
     * @return Lecteur
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;

        return $this;
    }

    /**
     * Get vendu
     *
     * @return integer
     */
    public function getVendu()
    {
        return $this->vendu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Lecteur
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
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
     * Set versionFicheDescriptive
     *
     * @param \IC\ProduitFiniBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive
     *
     * @return Lecteur
     */
    public function setVersionFicheDescriptive(\IC\ProduitFiniBundle\Entity\VersionFicheDescriptive $versionFicheDescriptive = null)
    {
        $this->versionFicheDescriptive = $versionFicheDescriptive;

        return $this;
    }

    /**
     * Get versionFicheDescriptive
     *
     * @return \IC\ProduitFiniBundle\Entity\VersionFicheDescriptive
     */
    public function getVersionFicheDescriptive()
    {
        return $this->versionFicheDescriptive;
    }
}
