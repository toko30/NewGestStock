<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Autre
 */
class Autre
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var integer
     */
    private $idFournisseur;

    /**
     * @var integer
     */
    private $type;

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
     * Set reference
     *
     * @param string $reference
     *
     * @return Autre
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
     * Set designation
     *
     * @param string $designation
     *
     * @return Autre
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
     * Set idFournisseur
     *
     * @param integer $idFournisseur
     *
     * @return Autre
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
     * Set type
     *
     * @param integer $type
     *
     * @return Autre
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
     * Set petite
     *
     * @param integer $petite
     *
     * @return Autre
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
     * @return Autre
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
     * @return Autre
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
}
