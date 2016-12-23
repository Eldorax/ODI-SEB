<?php

namespace AppBundle\Entity;

/**
 * Magasinier
 */
class Magasinier
{
    /**
     * @var integer
     */
    private $anciennete;

    /**
     * @var integer
     */
    private $salaire;

    /**
     * @var \AppBundle\Entity\User
     */
    private $login;


    /**
     * Set anciennete
     *
     * @param integer $anciennete
     *
     * @return Magasinier
     */
    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;

        return $this;
    }

    /**
     * Get anciennete
     *
     * @return integer
     */
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    /**
     * Set salaire
     *
     * @param integer $salaire
     *
     * @return Magasinier
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return integer
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set login
     *
     * @param \AppBundle\Entity\User $login
     *
     * @return Magasinier
     */
    public function setLogin(\AppBundle\Entity\User $login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return \AppBundle\Entity\User
     */
    public function getLogin()
    {
        return $this->login;
    }
}
