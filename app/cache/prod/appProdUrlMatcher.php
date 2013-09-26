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

        if (0 === strpos($pathinfo, '/devis')) {
            // acme_devis_homepage
            if ($pathinfo === '/devis') {
                return array (  '_controller' => 'Acme\\DevisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_devis_homepage',);
            }

            // acme_devis
            if (preg_match('#^/devis/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_devis')), array (  '_controller' => 'Acme\\DevisBundle\\Controller\\DefaultController::devisAction',));
            }

        }

        // acme_devis_commande
        if (0 === strpos($pathinfo, '/facture') && preg_match('#^/facture/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_devis_commande')), array (  '_controller' => 'Acme\\DevisBundle\\Controller\\DefaultController::factureAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
