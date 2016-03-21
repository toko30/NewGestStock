<?php

namespace IC\ApprovisionnementBundle\Entity;

/**
 * ProduitFiniNomenclature
 */
class ProduitFiniNomenclature
{
    /**
     * @var integer
     */
    private $idVersion;

    /**
     * @var integer
     */
    private $idComposant;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\ApprovisionnementBundle\Entity\Composant
     */
    private $composant;

    /**
     * @var \IC\ApprovisionnementBundle\Entity\VersionNomenclature
     */
    private $versionNomenclature;


    /**
     * Set idVersion
     *
     * @param integer $idVersion
     *
     * @return ProduitFiniNomenclature
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
     * Set idComposant
     *
     * @param integer $idComposant
     *
     * @return ProduitFiniNomenclature
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return ProduitFiniNomenclature
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
     * @param \IC\ApprovisionnementBundle\Entity\Composant $composant
     *
     * @return ProduitFiniNomenclature
     */
    public function setComposant(\IC\ApprovisionnementBundle\Entity\Composant $composant = null)
    {
        $this->composant = $composant;

        return $this;
    }

    /**
     * Get composant
     *
     * @return \IC\ApprovisionnementBundle\Entity\Composant
     */
    public function getComposant()
    {
        return $this->composant;
    }

    /**
     * Set versionNomenclature
     *
     * @param \IC\ApprovisionnementBundle\Entity\VersionNomenclature $versionNomenclature
     *
     * @return ProduitFiniNomenclature
     */
    public function setVersionNomenclature(\IC\ApprovisionnementBundle\Entity\VersionNomenclature $versionNomenclature = null)
    {
        $this->versionNomenclature = $versionNomenclature;

        return $this;
    }

    /**
     * Get versionNomenclature
     *
     * @return \IC\ApprovisionnementBundle\Entity\VersionNomenclature
     */
    public function getVersionNomenclature()
    {
        return $this->versionNomenclature;
    }
}

