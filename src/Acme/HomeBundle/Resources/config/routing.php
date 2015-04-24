<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('acme_home_homepage', new Route('/home/{name}', array(
    '_controller' => 'AcmeHomeBundle:Home:index',
)));

return $collection;
