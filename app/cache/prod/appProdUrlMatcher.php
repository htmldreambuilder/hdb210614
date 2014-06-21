<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // acme_task_homepage
        if (rtrim($pathinfo, '/') === '/hello') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_task_homepage');
            }

            return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::newAction',  '_route' => 'acme_task_homepage',);
        }

        // hdb_inicio
        if (rtrim($pathinfo, '/') === '/inicio') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hdb_inicio');
            }

            return array (  '_controller' => 'HDB\\webBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hdb_inicio',);
        }

        // hdb_servicios
        if (rtrim($pathinfo, '/') === '/servicios') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hdb_servicios');
            }

            return array (  '_controller' => 'HDB\\webBundle\\Controller\\ServiciosController::serviciosAction',  '_route' => 'hdb_servicios',);
        }

        // hdb_cazaycampo
        if (rtrim($pathinfo, '/') === '/cazaycampo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hdb_cazaycampo');
            }

            return array (  '_controller' => 'HDB\\webBundle\\Controller\\CazaYCampoController::cazaYCampoAction',  '_route' => 'hdb_cazaycampo',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
