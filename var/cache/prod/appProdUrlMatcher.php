<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'AppBundle\\Controller\\SearchController::searchAction',  '_route' => 'search',);
        }

        // home
        if (preg_match('#^/(?P<message>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  'message' => '',));
        }

        $host = $this->context->getHost();

        if (preg_match('#^projet$#si', $host, $hostMatches)) {
            // sunset
            if (0 === strpos($pathinfo, '/sunset') && preg_match('#^/sunset/(?P<_locale>fr|en)/longitude/(?P<longitude>\\d+(\\.\\d+)?)/latitude/(?P<latitude>\\d+(\\.\\d+)?)/heure(?:\\.(?P<_format>html|txt|csv))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sunset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sunset')), array (  '_controller' => 'AppBundle\\Controller\\SunsetController::sunsetHourAction',  '_format' => 'html',));
            }
            not_sunset:

        }

        if (0 === strpos($pathinfo, '/lieu')) {
            // listlieu
            if (0 === strpos($pathinfo, '/lieu/list') && preg_match('#^/lieu/list(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listlieu')), array (  '_controller' => 'AppBundle\\Controller\\LieuController::listLieuAction',  'message' => '',));
            }

            // deletelieu
            if (0 === strpos($pathinfo, '/lieu/delete') && preg_match('#^/lieu/delete/(?P<nomlieu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletelieu')), array (  '_controller' => 'AppBundle\\Controller\\LieuController::deleteLieuAction',));
            }

            // addlieu
            if ($pathinfo === '/lieu/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\LieuController::addLieuAction',  '_route' => 'addlieu',);
            }

            // updatelieu
            if (0 === strpos($pathinfo, '/lieu/update') && preg_match('#^/lieu/update/(?P<nomlieu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updatelieu')), array (  '_controller' => 'AppBundle\\Controller\\LieuController::updateLieuAction',));
            }

        }

        if (0 === strpos($pathinfo, '/personne')) {
            // listpersonne
            if (0 === strpos($pathinfo, '/personne/list') && preg_match('#^/personne/list(?:/(?P<message>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listpersonne')), array (  '_controller' => 'AppBundle\\Controller\\PersonneController::listPersonneAction',  'message' => '',));
            }

            // addpersonne
            if ($pathinfo === '/personne/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::addPersonneAction',  '_route' => 'addpersonne',);
            }

            // updatepersonne
            if (0 === strpos($pathinfo, '/personne/update') && preg_match('#^/personne/update/(?P<nompersonne>[^/]++)/(?P<prenompersonne>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updatepersonne')), array (  '_controller' => 'AppBundle\\Controller\\PersonneController::updatePersonneAction',));
            }

            // listvoyages
            if (0 === strpos($pathinfo, '/personne/voyages') && preg_match('#^/personne/voyages/(?P<nompersonne>[^/]++)/(?P<prenompersonne>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listvoyages')), array (  '_controller' => 'AppBundle\\Controller\\PersonneController::listVoyagesAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
