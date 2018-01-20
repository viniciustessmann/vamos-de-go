<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pre-order' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteBundle\\Controller\\DefaultController::preOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pre-venda',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'regulation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteBundle\\Controller\\DefaultController::regulationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/regulamento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test-now' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteBundle\\Controller\\DefaultController::tryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/experimente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partner' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteBundle\\Controller\\DefaultController::partnerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/seja-parceiro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_driver_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DriverController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/motoristas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_driver_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DriverController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/novo_motorista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_driver_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DriverController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editar_motorista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_driver_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DriverController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/apagar_motorista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_neighborhood_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/bairros',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_neighborhood_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/novo_bairro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_neighborhood_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editar_bairro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_neighborhood_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/apagar_bairro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_newsletter_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NewsletterController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/newsletters',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_newsletter_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NewsletterController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/novo_newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_newsletter_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NewsletterController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editar_newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_newsletter_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\NewsletterController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/apagar_newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_client_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PassengerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/clientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_client_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PassengerController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/novo_cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_client_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PassengerController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editar_cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_client_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PassengerController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/apagar_cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_client_set_way' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PassengerController::setWayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/definir_rota',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_point_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PointController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pontos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_point_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PointController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/novo_ponto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_point_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PointController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editar_ponto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_point_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PointController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/apagar_ponto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_way_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RouteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/rotas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_way_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RouteController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/detalhes_rota',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_way_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RouteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nova_rota',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_way_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RouteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editar_rota',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_admin_way_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\RouteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/apagar_rota',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
