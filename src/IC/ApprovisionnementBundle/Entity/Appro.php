<?php

namespace IC\ApprovisionnementBundle\Entity;

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
     * @var \IC\ApprovisionnementBundle\Entity\Fournisseur
     */
    private $fournisseur;

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
     * @param \IC\ApprovisionnementBundle\Entity\Fournisseur $fournisseur
     *
     * @return Appro
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

    /**
     * Add approComposant
     *
     * @param \IC\ApprovisionnementBundle\Entity\ApproComposant $approComposant
     *
     * @return Appro
     */
    public function addApproComposant(\IC\ApprovisionnementBundle\Entity\ApproComposant $approComposant)
    {
        $this->approComposant[] = $approComposant;

        return $this;
    }

    /**
     * Remove approComposant
     *
     * @param \IC\ApprovisionnementBundle\Entity\ApproComposant $approComposant
     */
    public function removeApproComposant(\IC\ApprovisionnementBundle\Entity\ApproComposant $approComposant)
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
     * @param \IC\ApprovisionnementBundle\Entity\ApproIdentifiant $approIdentifiant
     *
     * @return Appro
     */
    public function addApproIdentifiant(\IC\ApprovisionnementBundle\Entity\ApproIdentifiant $approIdentifiant)
    {
        $this->approIdentifiant[] = $approIdentifiant;

        return $this;
    }

    /**
     * Remove approIdentifiant
     *
     * @param \IC\ApprovisionnementBundle\Entity\ApproIdentifiant $approIdentifiant
     */
    public function removeApproIdentifiant(\IC\ApprovisionnementBundle\Entity\ApproIdentifiant $approIdentifiant)
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
     * @param \IC\ApprovisionnementBundle\Entity\ApproLecteur $approLecteur
     *
     * @return Appro
     */
    public function addApproLecteur(\IC\ApprovisionnementBundle\Entity\ApproLecteur $approLecteur)
    {
        $this->approLecteur[] = $approLecteur;

        return $this;
    }

    /**
     * Remove approLecteur
     *
     * @param \IC\ApprovisionnementBundle\Entity\ApproLecteur $approLecteur
     */
    public function removeApproLecteur(\IC\ApprovisionnementBundle\Entity\ApproLecteur $approLecteur)
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
     * @param \IC\ApprovisionnementBundle\Entity\ApproAutre $approAutre
     *
     * @return Appro
     */
    public function addApproAutre(\IC\ApprovisionnementBundle\Entity\ApproAutre $approAutre)
    {
        $this->approAutre[] = $approAutre;

        return $this;
    }

    /**
     * Remove approAutre
     *
     * @param \IC\ApprovisionnementBundle\Entity\ApproAutre $approAutre
     */
    public function removeApproAutre(\IC\ApprovisionnementBundle\Entity\ApproAutre $approAutre)
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
