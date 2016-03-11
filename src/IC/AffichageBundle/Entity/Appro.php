<?php

namespace IC\AffichageBundle\Entity;

/**
 * Appro
 */
class Appro
{
    /**
     * @var integer
     */
    private $idFournisseur;

    /**
     * @var \DateTime
     */
    private $dateCommande;

    /**
     * @var integer
     */
    private $typeProduit;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\AffichageBundle\Entity\Fournisseur
     */
    private $fournisseur;


    /**
     * Set idFournisseur
     *
     * @param integer $idFournisseur
     *
     * @return Appro
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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Appro
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set typeProduit
     *
     * @param integer $typeProduit
     *
     * @return Appro
     */
    public function setTypeProduit($typeProduit)
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return integer
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
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
     * Set fournisseur
     *
     * @param \IC\AffichageBundle\Entity\Fournisseur $fournisseur
     *
     * @return Appro
     */
    public function setFournisseur(\IC\AffichageBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \IC\AffichageBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approComposant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approIdentifiant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approLecteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approAutre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->approComposant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->approIdentifiant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->approLecteur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->approAutre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add approComposant
     *
     * @param \IC\AffichageBundle\Entity\ApproComposant $approComposant
     *
     * @return Appro
     */
    public function addApproComposant(\IC\AffichageBundle\Entity\ApproComposant $approComposant)
    {
        $this->approComposant[] = $approComposant;

        return $this;
    }

    /**
     * Remove approComposant
     *
     * @param \IC\AffichageBundle\Entity\ApproComposant $approComposant
     */
    public function removeApproComposant(\IC\AffichageBundle\Entity\ApproComposant $approComposant)
    {
        $this->approComposant->removeElement($approComposant);
    }

    /**
     * Get approComposant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApproComposant()
    {
        return $this->approComposant;
    }

    /**
     * Add approIdentifiant
     *
     * @param \IC\AffichageBundle\Entity\ApproIdentifiant $approIdentifiant
     *
     * @return Appro
     */
    public function addApproIdentifiant(\IC\AffichageBundle\Entity\ApproIdentifiant $approIdentifiant)
    {
        $this->approIdentifiant[] = $approIdentifiant;

        return $this;
    }

    /**
     * Remove approIdentifiant
     *
     * @param \IC\AffichageBundle\Entity\ApproIdentifiant $approIdentifiant
     */
    public function removeApproIdentifiant(\IC\AffichageBundle\Entity\ApproIdentifiant $approIdentifiant)
    {
        $this->approIdentifiant->removeElement($approIdentifiant);
    }

    /**
     * Get approIdentifiant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApproIdentifiant()
    {
        return $this->approIdentifiant;
    }

    /**
     * Add approLecteur
     *
     * @param \IC\AffichageBundle\Entity\ApproLecteur $approLecteur
     *
     * @return Appro
     */
    public function addApproLecteur(\IC\AffichageBundle\Entity\ApproLecteur $approLecteur)
    {
        $this->approLecteur[] = $approLecteur;

        return $this;
    }

    /**
     * Remove approLecteur
     *
     * @param \IC\AffichageBundle\Entity\ApproLecteur $approLecteur
     */
    public function removeApproLecteur(\IC\AffichageBundle\Entity\ApproLecteur $approLecteur)
    {
        $this->approLecteur->removeElement($approLecteur);
    }

    /**
     * Get approLecteur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApproLecteur()
    {
        return $this->approLecteur;
    }

    /**
     * Add approAutre
     *
     * @param \IC\AffichageBundle\Entity\ApproAutre $approAutre
     *
     * @return Appro
     */
    public function addApproAutre(\IC\AffichageBundle\Entity\ApproAutre $approAutre)
    {
        $this->approAutre[] = $approAutre;

        return $this;
    }

    /**
     * Remove approAutre
     *
     * @param \IC\AffichageBundle\Entity\ApproAutre $approAutre
     */
    public function removeApproAutre(\IC\AffichageBundle\Entity\ApproAutre $approAutre)
    {
        $this->approAutre->removeElement($approAutre);
    }

    /**
     * Get approAutre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApproAutre()
    {
        return $this->approAutre;
    }
}
