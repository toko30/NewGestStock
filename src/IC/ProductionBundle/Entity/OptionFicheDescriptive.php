<?php

namespace IC\ProductionBundle\Entity;

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
     * @var \IC\ProductionBundle\Entity\OptionProduitFini
     */
    private $optionProduitFini;

    /**
     * @var \IC\ProductionBundle\Entity\FicheDescriptiveOption
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
     * @param \IC\ProductionBundle\Entity\OptionProduitFini $optionProduitFini
     *
     * @return OptionFicheDescriptive
     */
    public function setOptionProduitFini(\IC\ProductionBundle\Entity\OptionProduitFini $optionProduitFini = null)
    {
        $this->optionProduitFini = $optionProduitFini;

        return $this;
    }

    /**
     * Get optionProduitFini
     *
     * @return \IC\ProductionBundle\Entity\OptionProduitFini
     */
    public function getOptionProduitFini()
    {
        return $this->optionProduitFini;
    }

    /**
     * Set ficheDescriptiveOption
     *
     * @param \IC\ProductionBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption
     *
     * @return OptionFicheDescriptive
     */
    public function setFicheDescriptiveOption(\IC\ProductionBundle\Entity\FicheDescriptiveOption $ficheDescriptiveOption = null)
    {
        $this->ficheDescriptiveOption = $ficheDescriptiveOption;

        return $this;
    }

    /**
     * Get ficheDescriptiveOption
     *
     * @return \IC\ProductionBundle\Entity\FicheDescriptiveOption
     */
    public function getFicheDescriptiveOption()
    {
        return $this->ficheDescriptiveOption;
    }
}

