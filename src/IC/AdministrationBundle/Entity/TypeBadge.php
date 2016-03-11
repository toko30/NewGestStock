<?php

namespace IC\AdministrationBundle\Entity;

/**
 * TypeBadge
 */
class TypeBadge
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
    private $frequence;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\AdministrationBundle\Entity\SousTypeBadge
     */
    private $sousTypeBadge;

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return TypeBadge
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
     * @return TypeBadge
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
     * Set frequence
     *
     * @param integer $frequence
     *
     * @return TypeBadge
     */
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get frequence
     *
     * @return integer
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return TypeBadge
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
     * Set sousTypeBadge
     *
     * @param \IC\AdministrationBundle\Entity\SousTypeBadge $sousTypeBadge
     *
     * @return TypeBadge
     */
    public function setSousTypeBadge(\IC\AdministrationBundle\Entity\SousTypeBadge $sousTypeBadge = null)
    {
        $this->sousTypeBadge = $sousTypeBadge;

        return $this;
    }

    /**
     * Get sousTypeBadge
     *
     * @return \IC\AdministrationBundle\Entity\SousTypeBadge
     */
    public function getSousTypeBadge()
    {
        return $this->sousTypeBadge;
    }
}
