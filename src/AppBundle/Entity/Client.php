<?php

namespace AppBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var integer
     */
    private $fidelite;

    /**
     * @var \AppBundle\Entity\User
     */
    private $login;


    /**
     * Set fidelite
     *
     * @param integer $fidelite
     *
     * @return Client
     */
    public function setFidelite($fidelite)
    {
        $this->fidelite = $fidelite;

        return $this;
    }

    /**
     * Get fidelite
     *
     * @return integer
     */
    public function getFidelite()
    {
        return $this->fidelite;
    }

    /**
     * Set login
     *
     * @param \AppBundle\Entity\User $login
     *
     * @return Client
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
