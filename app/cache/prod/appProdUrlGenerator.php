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
    private static $declaredRoutes = array(
        'acme_task_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hdb_inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HDB\\webBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hdb_servicios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HDB\\webBundle\\Controller\\ServiciosController::serviciosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hdb_cazaycampo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HDB\\webBundle\\Controller\\CazaYCampoController::cazaYCampoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cazaycampo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
