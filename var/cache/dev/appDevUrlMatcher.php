<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        // interface_magasinier
        if ($pathinfo === '/magasinier/interface') {
            return array (  '_controller' => 'AppBundle\\Controller\\MagasinierController::interfaceAction',  '_route' => 'interface_magasinier',);
        }

        if (0 === strpos($pathinfo, '/produits')) {
            // ajoutproduit
            if (0 === strpos($pathinfo, '/produits/ajouter') && preg_match('#^/produits/ajouter(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutproduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::ajouterProduitAction',  'message' => '',));
            }

            // modifierstock
            if (0 === strpos($pathinfo, '/produits/modifier') && preg_match('#^/produits/modifier(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierstock')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::modifierProduitAction',  'message' => '',));
            }

            // telechargement
            if ($pathinfo === '/produits/telechargement') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::telechargerProduitAction',  'message' => '',  '_route' => 'telechargement',);
            }

            // alerte
            if ($pathinfo === '/produits/alerte') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::alerteProduitAction',  'message' => '',  '_route' => 'alerte',);
            }

            // listproduit
            if (0 === strpos($pathinfo, '/produits/list') && preg_match('#^/produits/list(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listproduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',  'message' => '',));
            }

        }

        if (0 === strpos($pathinfo, '/magasinier')) {
            if (0 === strpos($pathinfo, '/magasinier/panier')) {
                // paniers
                if (0 === strpos($pathinfo, '/magasinier/paniers') && preg_match('#^/magasinier/paniers(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paniers')), array (  '_controller' => 'AppBundle\\Controller\\MagasinierController::paniersAction',  'message' => '',));
                }

                // panier
                if (preg_match('#^/magasinier/panier/(?P<numpanier>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier')), array (  '_controller' => 'AppBundle\\Controller\\MagasinierController::panierAction',  'message' => '',));
                }

            }

            // livraison
            if (0 === strpos($pathinfo, '/magasinier/livraison') && preg_match('#^/magasinier/livraison/(?P<numpanier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraison')), array (  '_controller' => 'AppBundle\\Controller\\MagasinierController::livraisonAction',  'message' => '',));
            }

        }

        if (0 === strpos($pathinfo, '/auth')) {
            // auth
            if (rtrim($pathinfo, '/') === '/auth/form') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'auth');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::authAction',  '_route' => 'auth',);
            }

            // disconnect
            if ($pathinfo === '/auth/disconnect') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::disconnectAction',  '_route' => 'disconnect',);
            }

        }

        // interface_client
        if (0 === strpos($pathinfo, '/client/interface') && preg_match('#^/client/interface(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'interface_client')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::interfaceAction',  'message' => '',));
        }

        // panier_list
        if (0 === strpos($pathinfo, '/panier/list') && preg_match('#^/panier/list(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_list')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::panierListAction',  'message' => '',));
        }

        // panier_mod
        if (0 === strpos($pathinfo, '/client/commander') && preg_match('#^/client/commander/(?P<numpanier>[^/]++)(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_mod')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::ModPanierAction',  'message' => '',));
        }

        if (0 === strpos($pathinfo, '/panier')) {
            // delete_panier
            if (0 === strpos($pathinfo, '/panier/delete') && preg_match('#^/panier/delete(?:/(?P<numpanier>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_panier')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::DeletePanierAction',  'numpanier' => 0,));
            }

            if (0 === strpos($pathinfo, '/panier/v')) {
                // valid_panier
                if (0 === strpos($pathinfo, '/panier/valid') && preg_match('#^/panier/valid(?:/(?P<numpanier>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valid_panier')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::validPanierAction',  'numpanier' => 0,));
                }

                // voir_panier
                if (0 === strpos($pathinfo, '/panier/voir') && preg_match('#^/panier/voir(?:/(?P<numpanier>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'voir_panier')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::voirPanierAction',  'numpanier' => 0,));
                }

            }

            // new_panier
            if ($pathinfo === '/panier/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\ClientController::newPanierAction',  '_route' => 'new_panier',);
            }

            // delete_produit_panier
            if (0 === strpos($pathinfo, '/panier/delete') && preg_match('#^/panier/delete/(?P<numpanier>[^/]++)/(?P<numproduit>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_produit_panier')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::DeleteproduitPanierAction',));
            }

            // add_produit_panier
            if (0 === strpos($pathinfo, '/panier/add') && preg_match('#^/panier/add/(?P<numpanier>[^/]++)/(?P<numproduit>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_produit_panier')), array (  '_controller' => 'AppBundle\\Controller\\ClientController::addProduitPanierAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
