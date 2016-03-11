<?php

namespace IC\ApprovisionnementBundle\Entity;

/**
 * Fournisseur
 */
class Fournisseur
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $numero;

    /**
     * @var string
     */
    private $site;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $composantFournisseur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $badgeFournisseur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lecteurAutre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $autre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->composantFournisseur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->badgeFournisseur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lecteurAutre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->autre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Fournisseur
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
     * Set contact
     *
     * @param string $contact
     *
     * @return Fournisseur
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Fournisseur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Fournisseur
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Fournisseur
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Fournisseur
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
     * Add composantFournisseur
     *
     * @param \IC\ApprovisionnementBundle\Entity\ComposantFournisseur $composantFournisseur
     *
     * @return Fournisseur
     */
    public function addComposantFournisseur(\IC\ApprovisionnementBundle\Entity\ComposantFournisseur $composantFournisseur)
    {
        $this->composantFournisseur[] = $composantFournisseur;

        return $this;
    }

    /**
     * Remove composantFournisseur
     *
     * @param \IC\ApprovisionnementBundle\Entity\ComposantFournisseur $composantFournisseur
     */
    public function removeComposantFournisseur(\IC\ApprovisionnementBundle\Entity\ComposantFournisseur $composantFournisseur)
    {
        $this->composantFournisseur->removeElement($composantFournisseur);
    }

    /**
     * Get composantFournisseur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComposantFournisseur()
    {
        return $this->composantFournisseur;
    }

    /**
     * Add badgeFournisseur
     *
     * @param \IC\ApprovisionnementBundle\Entity\BadgeFournisseur $badgeFournisseur
     *
     * @return Fournisseur
     */
    public function addBadgeFournisseur(\IC\ApprovisionnementBundle\Entity\BadgeFournisseur $badgeFournisseur)
    {
        $this->badgeFournisseur[] = $badgeFournisseur;

        return $this;
    }

    /**
     * Remove badgeFournisseur
     *
     * @param \IC\ApprovisionnementBundle\Entity\BadgeFournisseur $badgeFournisseur
     */
    public function removeBadgeFournisseur(\IC\ApprovisionnementBundle\Entity\BadgeFournisseur $badgeFournisseur)
    {
        $this->badgeFournisseur->removeElement($badgeFournisseur);
    }

    /**
     * Get badgeFournisseur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBadgeFournisseur()
    {
        return $this->badgeFournisseur;
    }

    /**
     * Add lecteurAutre
     *
     * @param \IC\ApprovisionnementBundle\Entity\TypeLecteurAutre $lecteurAutre
     *
     * @return Fournisseur
     */
    public function addLecteurAutre(\IC\ApprovisionnementBundle\Entity\TypeLecteurAutre $lecteurAutre)
    {
        $this->lecteurAutre[] = $lecteurAutre;

        return $this;
    }

    /**
     * Remove lecteurAutre
     *
     * @param \IC\ApprovisionnementBundle\Entity\TypeLecteurAutre $lecteurAutre
     */
    public function removeLecteurAutre(\IC\ApprovisionnementBundle\Entity\TypeLecteurAutre $lecteurAutre)
    {
        $this->lecteurAutre->removeElement($lecteurAutre);
    }

    /**
     * Get lecteurAutre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLecteurAutre()
    {
        return $this->lecteurAutre;
    }

    /**
     * Add autre
     *
     * @param \IC\ApprovisionnementBundle\Entity\Autre $autre
     *
     * @return Fournisseur
     */
    public function addAutre(\IC\ApprovisionnementBundle\Entity\Autre $autre)
    {
        $this->autre[] = $autre;

        return $this;
    }

    /**
     * Remove autre
     *
     * @param \IC\ApprovisionnementBundle\Entity\Autre $autre
     */
    public function removeAutre(\IC\ApprovisionnementBundle\Entity\Autre $autre)
    {
        $this->autre->removeElement($autre);
    }

    /**
     * Get autre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAutre()
    {
        return $this->autre;
    }
}

