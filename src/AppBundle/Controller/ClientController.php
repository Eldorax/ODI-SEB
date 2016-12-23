<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Panier;
use AppBundle\Entity\Produit;
use AppBundle\Entity\Produit_dans_panier;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controller des actions des clients.
 */
class ClientController extends Controller
{
           
    /**
     * Iterface des clients. (liste des pages accessbiles pas les clients)
     */
    public function interfaceAction(Request $request)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') == 'client' )
        {
           return $this->render('client/interface.html.twig');
        }  
        return $this->redirectToRoute('listproduit');
    }
    
    /**
     * Liste des paniers pour un client donné.
     * @param string $message Message de validation. 
     */
    public function panierListAction(Request $request, $message)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
        }
        else
        {
            $paniers = $this->getClientPanier( $session->get('login') );
            return $this->render('panier/choix_panier_mod.html.twig',
                                ['paniers' => $paniers, 'msg' => $message]);
        }
    }
    
    
    /**
     * Action de suppresion d'un panier.
     * @param mixed $numpanier Le panier à supprimer. 
     */
    public function DeletePanierAction(Request $request, $numpanier)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
        }
        else
        {
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            //Vérification de l'appartenance du panier et de son état.
            if( $p->getLogin() == $session->get('login')  && $p->getEtat() == 'Non validé')
            {
                $this->deleteProduitsFromPanier($p->getNumpanier());
                $em->remove($p);
                $em->flush();
            }
            else
            {
                return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
            }
            
            return $this->redirectToRoute('panier_list',
                    array('message' => 'Panier supprimé'));
        }
    }
    
    /**
     * Page de modification d'un panier.
     * @param string $message Message de validation. 
     * @param mixed $numpanier Le panier à modifier. 
     */
    public function ModPanierAction(Request $request, $numpanier, $message)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir'
                          . 'cette page redirection...'));
        }
        else
        {
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            if( $p->getLogin() == $session->get('login') && $p->getEtat() == 'Non validé')
            {
                $produits = 
                        $em->getRepository(Produit::class)
                            ->findBy(array('visible' => true));
                $produit_dans_panier = 
                        $em->getRepository(Produit_dans_panier::class)
                            ->findBy(array('numpanier' => $numpanier));
                
                return $this->render('client/commander.twig',
                                    array('produits'            => $produits,
                                          'produit_dans_panier' => $produit_dans_panier,
                                          'numpanier'           => $numpanier,
                                          'msg'                 => $message));
            }
            else
            {   // pas le panier du bon client
                return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
            }
        }
    }
    
    /**
     * Page de visualisation d'un panier.
     * @param mixed $numpanier Le panier à visualiser. 
     */
    public function voirPanierAction(Request $request, $numpanier)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir'
                          . 'cette page redirection...'));
        }
        else //C'est bien un client.
        {
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            //Vérification de l'appartenance du panier.
            if( $p->getLogin() == $session->get('login') )
            {
                $produit_dans_panier = 
                        $em->getRepository(Produit_dans_panier::class)
                            ->findBy(array('numpanier' => $numpanier));
                
                return $this->render('panier/voir.twig',
                                    array('produit_dans_panier' => $produit_dans_panier,
                                          'numpanier'           => $numpanier
                                    ));
            }
            else
            {   // pas le panier du bon client
                return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
            }
        }
    }
    
    /**
     * Action de validation d'un panier.
     * @param mixed $numpanier Le panier à valider. 
     */
    public function validPanierAction(Request $request, $numpanier)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') == 'client' )
        { 
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            //Vérification de l'appartenance du panier et de son état.
            if( $p->getLogin() == $session->get('login') && $p->getEtat() == 'Non validé')
            {
                $p->setEtat('En cours de traitement');
                $em->persist($p);
                $em->flush();
                return $this->redirectToRoute('panier_list',
                    array('message' => 'Panier validé'));
            }
        }
        //mauvais user ou panier
        return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
    }
    
    
    /**
     * Action de suppression d'un produit contenue dans un panier.
     * @param mixed $numpanier Le panier sujet à modification.
     * @param mixed $numproduit Le produit à surpprimer. 
     */
    public function DeleteproduitPanierAction(Request $request, $numpanier, $numproduit)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
        }
        else
        { 
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            if( $p->getLogin() == $session->get('login') )
            {
                $this->deleteProduitFromPanier($numpanier, $numproduit);
            }
            else
            {
                return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
            }
            
            return $this->redirectToRoute('panier_mod',
                    array('numpanier' => $numpanier, 'message' => 'Produit supprimé du panier'));
        }
    }
    
    /**
     * Action de D'ajout d'un produit dans un panier.
     * @param mixed $numpanier Le panier sujet à modification.
     * @param mixed $numproduit Le produit à ajouter. 
     */
    public function addproduitPanierAction(Request $request, $numpanier, $numproduit)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
        }
        else //c'est un client connecté
        {
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            //Le panier appartient bien au client
            if( $p->getLogin() == $session->get('login') )
            {
                //Le produit existe deja ? (update ou insert)
                if($this->isInPanier($numpanier, $numproduit))
                {
                    //update + one
                    $this->updatePlusOnePanier($numpanier, $numproduit);
                }
                else
                {
                    //insert one
                    $rep = $this->getDoctrine()->getRepository('AppBundle:Produit');
                    $prod = $rep->findOneBy(array('numproduit' => $numproduit));
                    
                    $rep = $this->getDoctrine()->getRepository('AppBundle:Panier');
                    $pan = $rep->findOneBy(array('numpanier' => $numpanier));
                    
                    $pdp = new Produit_dans_panier();
                    $pdp->setNumpanier($pan)
                        ->setNumproduit($prod)
                        ->setQteCmd(1);
                    $em->persist($pdp);
                    $em->flush();
                }
            }
            else
            {
                return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
            }
            
            return $this->redirectToRoute('panier_mod',
                    array('numpanier' => $numpanier, 'message' => 'Produit ajouté au panier'));
        }
    }
    
    /**
     * Action de création d'un panier.
     */
    public function newPanierAction(Request $request)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir '
                        . 'cette page, redirection...'));
        }
        else //c'est un client connecté
        {
            $em    = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                     'SELECT MAX(p.numpanier)
                      FROM AppBundle:Panier p
                     ');
            $res   = $query->getResult();
            
            $new_panier = new Panier();
            $new_panier
                    ->setEtat('Non Validé')
                    ->setLogin( $session->get('login') );
            $em->persist($new_panier);
            $em->flush();
        }
        
        return $this->redirectToRoute('panier_mod',
                    array('numpanier' => $new_panier->getNumpanier(), 'message' => 'Nouveau panier créé'));
    }

    
    /**
     * Obtenir tout les panier d'un client donné.
     * @param string $login Le login du client.
     * @return mixed[]|null La liste des panier de l'utilisateur $login.
     */
    private function getClientPanier($login)
    {
        $em    = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                     'SELECT p.numpanier, p.etat
                     FROM AppBundle:Panier p
                     WHERE p.login = :p_login'
                    )->setParameter('p_login', $login);
        return $query->getResult();
    }
    
    /**
     * Supprime le panier donné.
     * @param string $panier Le Panier.
     */
    private function deleteProduitsFromPanier($panier)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $query = $qb->delete('AppBundle:Produit_dans_panier', 'pdp')
            ->where('pdp.numpanier = :p_panier')
            ->setParameter('p_panier', $panier)
            ->getQuery();
        $query->execute();
    }
    
    /**
     * Supprime un produit dans un panier.
     * @param string $panier Le panier à modifier.
     * @param string $produitr Le produit à supprimer du $panier.
     */
    private function deleteProduitFromPanier($panier, $produit)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $query = $qb->delete('AppBundle:Produit_dans_panier', 'pdp')
            ->where('pdp.numproduit = :p_produit AND pdp.numpanier = :p_panier')
            ->setParameter('p_produit', $produit)
            ->setParameter('p_panier', $panier)
            ->getQuery();
        $query->execute();
    }
    
    /**
     * Vérifi si un produit donné est présent dans le
     * panier donné.
     * @param string $panier Le panier.
     * @param string $produitr Le produit.
     * @return boolean true ssi le $produit est dans le $panier.
     */
    private function isInPanier($panier, $produit)
    {
        $repository = $this->getDoctrine()
                        ->getRepository('AppBundle:Produit_dans_panier');
        $res = $repository->findOneBy(
                array('numpanier' => $panier, 'numproduit' => $produit));
        
        return count($res) === 1;
    }
    
    /**
     * Ajoute un produit au panier qui contien deja ce produit. (update)
     * @param string $panier Le panier.
     * @param string $produitr Le produit.
     */
    private function updatePlusOnePanier($panier, $produit)
    {
        $em    = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                     'UPDATE AppBundle:Produit_dans_panier pdp
                      SET pdp.qte_cmd = pdp.qte_cmd + 1
                      WHERE pdp.numpanier = :p_panier
                      AND pdp.numproduit = :p_produit
                     '
                    )->setParameter('p_panier', $panier)
                     ->setParameter('p_produit', $produit);
        $query->execute();
    }
}