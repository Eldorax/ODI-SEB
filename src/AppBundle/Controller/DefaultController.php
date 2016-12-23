<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * page home de l'application.
     */
    public function homeAction()
    {
        return $this->redirectToRoute('auth');
    }
}
