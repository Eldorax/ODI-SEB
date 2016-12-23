<?php

namespace AppBundle\Form\Data;

use Symfony\Component\Validator\Constraints as Assert;

class SearchPersonne
{
    private $nompersonne;
    
    private $prenompersonne;
    
    private $email;
   
    function getEmail() {
        return $this->email;
    }

    function getNompersonne() {
        return $this->nompersonne;
    }

    function getPrenompersonne() {
        return $this->prenompersonne;
    }

    function getAbonnement() {
        return $this->abonnement;
    }

    function setNompersonne($nompersonne) {
        $this->nompersonne = $nompersonne;
    }

    function setPrenompersonne($prenompersonne) {
        $this->prenompersonne = $prenompersonne;
    }

    function setAbonnement($abonnement) {
        $this->abonnement = $abonnement;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }


}
