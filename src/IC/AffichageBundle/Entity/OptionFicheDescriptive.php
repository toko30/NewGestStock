<?php

namespace IC\AffichageBundle\Entity;

/**
 * OptionFicheDescriptive
 */
class OptionFicheDescriptive
{
    /**
     * @var integer
     */
    private $idFicheDescriptiveOption;

    /**
     * @var integer
     */
    private $idOptionProduitFini;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IC\AffichageBundle\Entity\OptionProduitFini
     */
    private $optionProduitFini;

    /**
     * @var \IC\AffichageBundle\Entity\FicheDescriptiveOption
     */
    private $ficheDescriptiveOption;


    /**
     * Set idFicheDescriptiveOption
     *
     * @param integer $idFicheDescriptiveOption
     *
     * @return OptionFicheDescriptive
     */
    public function setIdFicheDescriptiveOption($idFicheDescriptiveOption)
    {
        $this->idFicheDescriptiveOption = $idFicheDescriptiveOption;

        return $this;
    }

    /**
     * Get idFicheDescriptiveOption
     *
     * @return integer
     */
    public function getIdFicheDescriptiveOption()
    {
        return $this->idFicheDescriptiveOption;
    }

    /**
     * Set idOptionProduitFini
     *
     * @param integer $idOptionProduitFini
     *
     * @return OptionFicheDescriptive
     */
    public function setIdOptionProduitFini($idOptionProduitFini)
    {
        $this->idOptionProduitFini = $idOptionProduitFini;

        return $this;
    }

    /**
     * Get idOptionProduitFini
     *
     * @return integer
     */
    public function getIdOptionProduitFini()
    {
        return $this->idOptionProduitFini;
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
     * Set optionProduitFini
     *
     * @param \IC\AffichageBundle\Entity\OptionProduitFini $optionProduitFini
     *
     * @return OptionFicheDescriptive
     */
    public function setOptionProduitFini(\IC\AffichageBundle\Entity\OptionProduitFini $optionProduitFini = null)
    {
        $this->optionProduitFini = $optionProduitFini;

        return $this;
    }

    /**
     * Get optionProduitFini
     *
     * @return \IC\AffichageBundle\Entity\OptionProduitFini
     */
    public function getOptionProduitFini()
    {
        return $this->optionProduitFini;
    }

    /**
     * Set ficheDescriptiveOption
     *
     * @param \IC\AffichageBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption
     *
     * @return OptionFicheDescriptive
     */
    public function setFicheDescriptiveOption(\IC\AffichageBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption = null)
    {
        $this->ficheDescriptiveOption = $ficheDescriptiveOption;

        return $this;
    }

    /**
     * Get ficheDescriptiveOption
     *
     * @return \IC\AffichageBundle\Entity\FicheDescriptiveOption
     */
    public function getFicheDescriptiveOption()
    {
        return $this->ficheDescriptiveOption;
    }
}
