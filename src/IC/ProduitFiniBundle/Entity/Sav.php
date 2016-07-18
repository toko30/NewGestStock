<?php

namespace IC\ProduitFiniBundle\Entity;

/**
 * Sav
 */
class Sav
{
    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var \DateTime
     */
    private $dateReception;

    /**
     * @var \DateTime
     */
    private $dateRenvoi;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set numSerie
     *
     * @param string $numSerie
     *
     * @return Sav
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Sav
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateReception
     *
     * @param \DateTime $dateReception
     *
     * @return Sav
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set dateRenvoi
     *
     * @param \DateTime $dateRenvoi
     *
     * @return Sav
     */
    public function setDateRenvoi($dateRenvoi)
    {
        $this->dateRenvoi = $dateRenvoi;

        return $this;
    }

    /**
     * Get dateRenvoi
     *
     * @return \DateTime
     */
    public function getDateRenvoi()
    {
        return $this->dateRenvoi;
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
