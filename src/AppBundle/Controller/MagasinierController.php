<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\Type\PanierType;
use AppBundle\Entity\Panier;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

/**
 * Controllers des magasiniers.
 */
class MagasinierController extends Controller{
   
    /**
     * Interface des magasiniers.
     */          
    public function interfaceAction(Request $request) {
        //On regarde si l'utilisateur est deja logé
        $session = $request->getSession();
        
        //Si l'utilisateur est deja logé on le log pas une autre fois
        if( $session->get('access') == 'magasinier' )
        {
           return $this->render('magasinier/interface.html.twig');
        }  
        return $this->redirectToRoute('listproduit');
    }
    
    /**
    * Affichage de la page "Gestion des paniers".
    *
    * @param Request $request pour la vérification de la session.
    * @param $message pour le résultat de la livraison en cas de redirect de la méthodes livraisonAction.
    *
    * @return la page "Gestion des paniers" ou de la liste des produits
    */
    public function paniersAction(Request $request, $message) {
        //On regarde si l'utilisateur est deja logé
        $session = $request->getSession();
        
        //Si l'utilisateur est deja logé on le log pas une autre fois
        if( $session->get('access') == 'magasinier' )
        {
            $em = $this->getDoctrine()->getManager();
            $paniers = $em->getRepository(Panier::class)->findList();
            return $this->render('magasinier/paniers.html.twig', ['paniers' => $paniers, 'message' => $message]);
        }  
        return $this->redirectToRoute('listproduit');
    }
    
    
    /**
    * Affichage des produits dans un panier.
    *
    * @param Request $request pour la vérification de la session.
    * @param $numpanier pour identifier le panier.
    *
    * @return la page avec les produits dans un panier ou de la liste des produits
    */
    public function panierAction(Request $request, $numpanier) {        
        //On regarde si l'utilisateur est deja logé
        $session = $request->getSession();
        
        //Si l'utilisateur est deja logé on le log pas une autre fois
        if( $session->get('access') == 'magasinier' )
        {
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository(Panier::class)->findPruducts($numpanier);
            return $this->render('magasinier/panier.html.twig', ['produits' => $produits]);
        }  
        return $this->redirectToRoute('listproduit');
    }
    
    /**
    * Diminution des quantités des produits dans un panier.
    *
    * @param Request $request pour la vérification de la session.
    * @param $numpanier pour identifier le panier.
    * @param $message pour le résultat de la livraison.
    *
    * @return la page "Gestion des paniers" ou de la liste des produits
    */
    public function livraisonAction(Request $request, $numpanier, $message) {        
        //On regarde si l'utilisateur est deja logé
        $session = $request->getSession();
        
        //Si l'utilisateur est deja logé on le log pas une autre fois
        if( $session->get('access') == 'magasinier' )
        {
            $em = $this->getDoctrine()->getManager();
            $message = $em->getRepository(Panier::class)->deliverPruducts($numpanier);
            $paniers = $em->getRepository(Panier::class)->findList();
            // rediriger vers la liste de paniers
            return $this->redirectToRoute('paniers', ['paniers' => $paniers, 'message' => $message]);
        }  
        return $this->redirectToRoute('listproduit');
    }
}