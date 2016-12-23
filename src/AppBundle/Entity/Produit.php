<?php

namespace AppBundle\Entity;

/**
 * Produit
 */
class Produit
{
    /**
     * @var string
     */
    private $numproduit;

    /**
     * @var string
     */
    private $nomproduit;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var integer
     */
    private $qte;


    /**
     * Get numproduit
     *
     * @return string
     */
    public function getNumproduit()
    {
        return $this->numproduit;
    }

    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return Produit
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return Produit
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer
     */
    public function getQte()
    {
        return $this->qte;
    }
    /**
     * @var boolean
     */
    private $visible;


    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Produit
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }
    /**
     * @var string
     */
    private $descriptif;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var integer
     */
    private $qtemin;

    /**
     * @var \DateTime
     */
    private $peremption;

    /**
     * @var string
     */
    private $photo;


    /**
     * Set numproduit
     *
     * @param integer $numproduit
     *
     * @return Produit
     */
    public function setNumproduit($numproduit)
    {
        $this->numproduit = $numproduit;

        return $this;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Produit
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Produit
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set qtemin
     *
     * @param integer $qtemin
     *
     * @return Produit
     */
    public function setQtemin($qtemin)
    {
        $this->qtemin = $qtemin;

        return $this;
    }

    /**
     * Get qtemin
     *
     * @return integer
     */
    public function getQtemin()
    {
        return $this->qtemin;
    }

    /**
     * Set peremption
     *
     * @param \DateTime $peremption
     *
     * @return Produit
     */
    public function setPeremption($peremption)
    {
        $this->peremption = $peremption;

        return $this;
    }

    /**
     * Get peremption
     *
     * @return \DateTime
     */
    public function getPeremption()
    {
        return $this->peremption;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Produit
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
