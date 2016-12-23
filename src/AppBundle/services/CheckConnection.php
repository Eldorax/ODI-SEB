<?php
namespace AppBundle\services;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Classe utilisé par les vues
 */
class CheckConnection
{
    private $session;
    private $auth;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Methode executé pour savoir si l'utilisateur
     * est logé ou pas (afficher connection ou déconnection dans les twig)
     */
    public function getAuth()
    {
        if( $this->session->get('isAuth') == 'yes' )
        {
            return true;
        }
        else
        {
            return false;
        } 
    }
}
