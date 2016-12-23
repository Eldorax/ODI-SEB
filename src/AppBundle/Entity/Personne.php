<?php

namespace AppBundle\Entity;

/**
 * Personne
 */
class Personne
{
    /**
     * @var string
     */
    private $nompersonne;

    /**
     * @var string
     */
    private $prenompersonne;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var \AppBundle\Entity\Abonnement
     */
    private $personneabonnement;


    /**
     * Set nompersonne
     *
     * @param string $nompersonne
     *
     * @return Personne
     */
    public function setNompersonne($nompersonne)
    {
        $this->nompersonne = $nompersonne;

        return $this;
    }

    /**
     * Get nompersonne
     *
     * @return string
     */
    public function getNompersonne()
    {
        return $this->nompersonne;
    }

    /**
     * Set prenompersonne
     *
     * @param string $prenompersonne
     *
     * @return Personne
     */
    public function setPrenompersonne($prenompersonne)
    {
        $this->prenompersonne = $prenompersonne;

        return $this;
    }

    /**
     * Get prenompersonne
     *
     * @return string
     */
    public function getPrenompersonne()
    {
        return $this->prenompersonne;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Personne
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
     * Set genre
     *
     * @param string $genre
     *
     * @return Personne
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set personneabonnement
     *
     * @param \AppBundle\Entity\Abonnement $personneabonnement
     *
     * @return Personne
     */
    public function setPersonneabonnement(\AppBundle\Entity\Abonnement $personneabonnement = null)
    {
        $this->personneabonnement = $personneabonnement;

        return $this;
    }

    /**
     * Get personneabonnement
     *
     * @return \AppBundle\Entity\Abonnement
     */
    public function getPersonneabonnement()
    {
        return $this->personneabonnement;
    }
}
