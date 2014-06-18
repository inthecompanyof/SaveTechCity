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

        // the_comet_cult_community_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'the_comet_cult_community_homepage');
            }

            return array (  '_controller' => 'TheCometCult\\CommunityBundle\\Controller\\HomeController::indexAction',  '_route' => 'the_comet_cult_community_homepage',);
        }

        // the_comet_cult_community_about
        if (rtrim($pathinfo, '/') === '/about') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'the_comet_cult_community_about');
            }

            return array (  '_controller' => 'TheCometCult\\CommunityBundle\\Controller\\HomeController::aboutAction',  '_route' => 'the_comet_cult_community_about',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
