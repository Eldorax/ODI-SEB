<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SearchController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (    0 => 'message',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',    'message' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sunset' => array (  0 =>   array (    0 => '_locale',    1 => 'longitude',    2 => 'latitude',    3 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SunsetController::sunsetHourAction',    '_format' => 'html',  ),  2 =>   array (    'latitude' => '\\d+(\\.\\d+)?',    'longitude' => '\\d+(\\.\\d+)?',    '_locale' => 'fr|en',    '_format' => 'html|txt|csv',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|txt|csv',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/heure',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+(\\.\\d+)?',      3 => 'latitude',    ),    3 =>     array (      0 => 'text',      1 => '/latitude',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+(\\.\\d+)?',      3 => 'longitude',    ),    5 =>     array (      0 => 'text',      1 => '/longitude',    ),    6 =>     array (      0 => 'variable',      1 => '/',      2 => 'fr|en',      3 => '_locale',    ),    7 =>     array (      0 => 'text',      1 => '/sunset',    ),  ),  4 =>   array (    0 =>     array (      0 => 'text',      1 => 'projet',    ),  ),  5 =>   array (  ),),
        'listlieu' => array (  0 =>   array (    0 => 'message',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LieuController::listLieuAction',    'message' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'message',    ),    1 =>     array (      0 => 'text',      1 => '/lieu/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletelieu' => array (  0 =>   array (    0 => 'nomlieu',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LieuController::deleteLieuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomlieu',    ),    1 =>     array (      0 => 'text',      1 => '/lieu/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addlieu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LieuController::addLieuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lieu/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updatelieu' => array (  0 =>   array (    0 => 'nomlieu',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LieuController::updateLieuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomlieu',    ),    1 =>     array (      0 => 'text',      1 => '/lieu/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listpersonne' => array (  0 =>   array (    0 => 'message',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::listPersonneAction',    'message' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'message',    ),    1 =>     array (      0 => 'text',      1 => '/personne/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addpersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::addPersonneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updatepersonne' => array (  0 =>   array (    0 => 'nompersonne',    1 => 'prenompersonne',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::updatePersonneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prenompersonne',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nompersonne',    ),    2 =>     array (      0 => 'text',      1 => '/personne/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listvoyages' => array (  0 =>   array (    0 => 'nompersonne',    1 => 'prenompersonne',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::listVoyagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prenompersonne',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nompersonne',    ),    2 =>     array (      0 => 'text',      1 => '/personne/voyages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
