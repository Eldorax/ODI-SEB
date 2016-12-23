<?php

// src/AppBundle/EventListener/TokenListener.php
namespace AppBundle\services;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

    /**
     * Classe utilisé pour capturer les
     * event du kernel symfony. 
     */
class GetResponseEvent
{
    
    /**
     * Methode executé pour modifier le header de chaque
     * réponse du serveur.
     */
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();
        
        //Mise en place des header pour la sécurité.
        $response->headers->set('x-frame-options', 'deny');
        $response->headers->set('X-Content-Type-Options', 'NOSNIFF');
        $response->headers->set('X-XSS-Protection', '1');
    }
}