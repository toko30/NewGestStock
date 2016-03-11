<?php

namespace IC\AdministrationBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @var \IC\AdministrationBundle\Entity\TypeProduit
     */
    private $typeProduit;
    
    /**
     * @var \IC\AdministrationBundle\Entity\TypeBadge
     */    
    private $badge;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lecteurAutre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $autre;
        
    public function __construct()
    {
        $this->badge = new ArrayCollection();
        $this->lecteurAutre = new ArrayCollection();
        $this->autre = new ArrayCollection();
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
     * Set typeProduit
     *
     * @param \IC\AdministrationBundle\Entity\TypeProduit $typeProduit
     *
     * @return Fournisseur
     */
    public function setTypeProduit(\IC\AdministrationBundle\Entity\TypeProduit $typeProduit = null)
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return \IC\AdministrationBundle\Entity\TypeProduit
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * Add badge
     *
     * @param \IC\AdministrationBundle\Entity\TypeBadge $badge
     *
     * @return Fournisseur
     */
    public function addBadge(\IC\AdministrationBundle\Entity\TypeBadge $badge)
    {
        $this->badge[] = $badge;

        return $this;
    }

    /**
     * Remove badge
     *
     * @param \IC\AdministrationBundle\Entity\TypeBadge $badge
     */
    public function removeBadge(\IC\AdministrationBundle\Entity\TypeBadge $badge)
    {
        $this->badge->removeElement($badge);
    }

    /**
     * Get badge
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Add lecteurAutre
     *
     * @param \IC\AdministrationBundle\Entity\TypeLecteurAutre $lecteurAutre
     *
     * @return Fournisseur
     */
    public function addLecteurAutre(\IC\AdministrationBundle\Entity\TypeLecteurAutre $lecteurAutre)
    {
        $this->lecteurAutre[] = $lecteurAutre;

        return $this;
    }

    /**
     * Remove lecteurAutre
     *
     * @param \IC\AdministrationBundle\Entity\TypeLecteurAutre $lecteurAutre
     */
    public function removeLecteurAutre(\IC\AdministrationBundle\Entity\TypeLecteurAutre $lecteurAutre)
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
     * @param \IC\AdministrationBundle\Entity\Autre $autre
     *
     * @return Fournisseur
     */
    public function addAutre(\IC\AdministrationBundle\Entity\Autre $autre)
    {
        $this->autre[] = $autre;

        return $this;
    }

    /**
     * Remove autre
     *
     * @param \IC\AdministrationBundle\Entity\Autre $autre
     */
    public function removeAutre(\IC\AdministrationBundle\Entity\Autre $autre)
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $composantFournisseur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $badgeFournisseur;


    /**
     * Add composantFournisseur
     *
     * @param \IC\AdministrationBundle\Entity\ComposantFournisseur $composantFournisseur
     *
     * @return Fournisseur
     */
    public function addComposantFournisseur(\IC\AdministrationBundle\Entity\ComposantFournisseur $composantFournisseur)
    {
        $this->composantFournisseur[] = $composantFournisseur;

        return $this;
    }

    /**
     * Remove composantFournisseur
     *
     * @param \IC\AdministrationBundle\Entity\ComposantFournisseur $composantFournisseur
     */
    public function removeComposantFournisseur(\IC\AdministrationBundle\Entity\ComposantFournisseur $composantFournisseur)
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
     * @param \IC\AdministrationBundle\Entity\BadgeFournisseur $badgeFournisseur
     *
     * @return Fournisseur
     */
    public function addBadgeFournisseur(\IC\AdministrationBundle\Entity\BadgeFournisseur $badgeFournisseur)
    {
        $this->badgeFournisseur[] = $badgeFournisseur;

        return $this;
    }

    /**
     * Remove badgeFournisseur
     *
     * @param \IC\AdministrationBundle\Entity\BadgeFournisseur $badgeFournisseur
     */
    public function removeBadgeFournisseur(\IC\AdministrationBundle\Entity\BadgeFournisseur $badgeFournisseur)
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
}
