<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // pre-order
        if ($pathinfo === '/pre-venda') {
            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::preOrderAction',  '_route' => 'pre-order',);
        }

        // regulation
        if ($pathinfo === '/regulamento') {
            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::regulationAction',  '_route' => 'regulation',);
        }

        // test-now
        if ($pathinfo === '/experimente') {
            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::tryAction',  '_route' => 'test-now',);
        }

        // partner
        if ($pathinfo === '/seja-parceiro') {
            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::partnerAction',  '_route' => 'partner',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_default_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_default_index');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
            }

            // go_admin_driver_index
            if ($pathinfo === '/admin/motoristas') {
                return array (  '_controller' => 'AdminBundle\\Controller\\DriverController::indexAction',  '_route' => 'go_admin_driver_index',);
            }

            // go_admin_driver_new
            if ($pathinfo === '/admin/novo_motorista') {
                return array (  '_controller' => 'AdminBundle\\Controller\\DriverController::newAction',  '_route' => 'go_admin_driver_new',);
            }

            // go_admin_driver_edit
            if (0 === strpos($pathinfo, '/admin/editar_motorista') && preg_match('#^/admin/editar_motorista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_driver_edit')), array (  '_controller' => 'AdminBundle\\Controller\\DriverController::editAction',));
            }

            // go_admin_driver_delete
            if (0 === strpos($pathinfo, '/admin/apagar_motorista') && preg_match('#^/admin/apagar_motorista/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_driver_delete')), array (  '_controller' => 'AdminBundle\\Controller\\DriverController::deleteAction',));
            }

            // go_admin_neighborhood_index
            if ($pathinfo === '/admin/bairros') {
                return array (  '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::indexAction',  '_route' => 'go_admin_neighborhood_index',);
            }

            // go_admin_neighborhood_new
            if ($pathinfo === '/admin/novo_bairro') {
                return array (  '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::newAction',  '_route' => 'go_admin_neighborhood_new',);
            }

            // go_admin_neighborhood_edit
            if (0 === strpos($pathinfo, '/admin/editar_bairro') && preg_match('#^/admin/editar_bairro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_neighborhood_edit')), array (  '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::editAction',));
            }

            // go_admin_neighborhood_delete
            if (0 === strpos($pathinfo, '/admin/apagar_bairro') && preg_match('#^/admin/apagar_bairro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_neighborhood_delete')), array (  '_controller' => 'AdminBundle\\Controller\\NeighborhoodController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/admin/n')) {
                // go_admin_newsletter_index
                if ($pathinfo === '/admin/newsletters') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\NewsletterController::indexAction',  '_route' => 'go_admin_newsletter_index',);
                }

                // go_admin_newsletter_new
                if ($pathinfo === '/admin/novo_newsletter') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\NewsletterController::newAction',  '_route' => 'go_admin_newsletter_new',);
                }

            }

            // go_admin_newsletter_edit
            if (0 === strpos($pathinfo, '/admin/editar_newsletter') && preg_match('#^/admin/editar_newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_newsletter_edit')), array (  '_controller' => 'AdminBundle\\Controller\\NewsletterController::editAction',));
            }

            // go_admin_newsletter_delete
            if (0 === strpos($pathinfo, '/admin/apagar_newsletter') && preg_match('#^/admin/apagar_newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_newsletter_delete')), array (  '_controller' => 'AdminBundle\\Controller\\NewsletterController::deleteAction',));
            }

            // go_admin_client_index
            if ($pathinfo === '/admin/clientes') {
                return array (  '_controller' => 'AdminBundle\\Controller\\PassengerController::indexAction',  '_route' => 'go_admin_client_index',);
            }

            // go_admin_client_new
            if ($pathinfo === '/admin/novo_cliente') {
                return array (  '_controller' => 'AdminBundle\\Controller\\PassengerController::newAction',  '_route' => 'go_admin_client_new',);
            }

            // go_admin_client_edit
            if (0 === strpos($pathinfo, '/admin/editar_cliente') && preg_match('#^/admin/editar_cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_client_edit')), array (  '_controller' => 'AdminBundle\\Controller\\PassengerController::editAction',));
            }

            // go_admin_client_delete
            if (0 === strpos($pathinfo, '/admin/apagar_cliente') && preg_match('#^/admin/apagar_cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_client_delete')), array (  '_controller' => 'AdminBundle\\Controller\\PassengerController::deleteAction',));
            }

            // go_admin_client_set_way
            if (0 === strpos($pathinfo, '/admin/definir_rota') && preg_match('#^/admin/definir_rota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_client_set_way')), array (  '_controller' => 'AdminBundle\\Controller\\PassengerController::setWayAction',));
            }

            // go_admin_point_index
            if ($pathinfo === '/admin/pontos') {
                return array (  '_controller' => 'AdminBundle\\Controller\\PointController::indexAction',  '_route' => 'go_admin_point_index',);
            }

            // go_admin_point_new
            if ($pathinfo === '/admin/novo_ponto') {
                return array (  '_controller' => 'AdminBundle\\Controller\\PointController::newAction',  '_route' => 'go_admin_point_new',);
            }

            // go_admin_point_edit
            if (0 === strpos($pathinfo, '/admin/editar_ponto') && preg_match('#^/admin/editar_ponto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_point_edit')), array (  '_controller' => 'AdminBundle\\Controller\\PointController::editAction',));
            }

            // go_admin_point_delete
            if (0 === strpos($pathinfo, '/admin/apagar_ponto') && preg_match('#^/admin/apagar_ponto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_point_delete')), array (  '_controller' => 'AdminBundle\\Controller\\PointController::deleteAction',));
            }

            // go_admin_way_index
            if ($pathinfo === '/admin/rotas') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RouteController::indexAction',  '_route' => 'go_admin_way_index',);
            }

            // go_admin_way_detail
            if (0 === strpos($pathinfo, '/admin/detalhes_rota') && preg_match('#^/admin/detalhes_rota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_way_detail')), array (  '_controller' => 'AdminBundle\\Controller\\RouteController::detailAction',));
            }

            // go_admin_way_new
            if ($pathinfo === '/admin/nova_rota') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RouteController::newAction',  '_route' => 'go_admin_way_new',);
            }

            // go_admin_way_edit
            if (0 === strpos($pathinfo, '/admin/editar_rota') && preg_match('#^/admin/editar_rota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_way_edit')), array (  '_controller' => 'AdminBundle\\Controller\\RouteController::editAction',));
            }

            // go_admin_way_delete
            if (0 === strpos($pathinfo, '/admin/apagar_rota') && preg_match('#^/admin/apagar_rota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'go_admin_way_delete')), array (  '_controller' => 'AdminBundle\\Controller\\RouteController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
