<?php

namespace IC\ApprovisionnementBundle\Entity;

/**
 * BadgeFournisseur
 */
class BadgeFournisseur
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var integer
     */
    private $idTypeBadge;

    /**
     * @var integer
     */
    private $idFournisseur;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\ApprovisionnementBundle\Entity\TypeBadge
     */
    private $typeBadge;

    /**
     * @var \IC\ApprovisionnementBundle\Entity\Fournisseur
     */
    private $fournisseur;


    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return BadgeFournisseur
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return BadgeFournisseur
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idTypeBadge
     *
     * @param integer $idTypeBadge
     *
     * @return BadgeFournisseur
     */
    public function setIdTypeBadge($idTypeBadge)
    {
        $this->idTypeBadge = $idTypeBadge;

        return $this;
    }

    /**
     * Get idTypeBadge
     *
     * @return integer
     */
    public function getIdTypeBadge()
    {
        return $this->idTypeBadge;
    }

    /**
     * Set idFournisseur
     *
     * @param integer $idFournisseur
     *
     * @return BadgeFournisseur
     */
    public function setIdFournisseur($idFournisseur)
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }

    /**
     * Get idFournisseur
     *
     * @return integer
     */
    public function getIdFournisseur()
    {
        return $this->idFournisseur;
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
     * Set typeBadge
     *
     * @param \IC\ApprovisionnementBundle\Entity\TypeBadge $typeBadge
     *
     * @return BadgeFournisseur
     */
    public function setTypeBadge(\IC\ApprovisionnementBundle\Entity\TypeBadge $typeBadge = null)
    {
        $this->typeBadge = $typeBadge;

        return $this;
    }

    /**
     * Get typeBadge
     *
     * @return \IC\ApprovisionnementBundle\Entity\TypeBadge
     */
    public function getTypeBadge()
    {
        return $this->typeBadge;
    }

    /**
     * Set fournisseur
     *
     * @param \IC\ApprovisionnementBundle\Entity\Fournisseur $fournisseur
     *
     * @return BadgeFournisseur
     */
    public function setFournisseur(\IC\ApprovisionnementBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \IC\ApprovisionnementBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
}

