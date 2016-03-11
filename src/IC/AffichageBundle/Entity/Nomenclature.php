<?php

namespace IC\AffichageBundle\Entity;

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
     * @var \IC\AffichageBundle\Entity\TypeLecteur
     */
    private $typeLecteur;


    /**
     * Set typeLecteur
     *
     * @param \IC\AffichageBundle\Entity\TypeLecteur $typeLecteur
     *
     * @return Nomenclature
     */
    public function setTypeLecteur(\IC\AffichageBundle\Entity\TypeLecteur $typeLecteur = null)
    {
        $this->typeLecteur = $typeLecteur;

        return $this;
    }

    /**
     * Get typeLecteur
     *
     * @return \IC\AffichageBundle\Entity\TypeLecteur
     */
    public function getTypeLecteur()
    {
        return $this->typeLecteur;
    }
}
