<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 09.04.2017
 * Time: 22:55
 */

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
$routes->add('bye', new Routing\Route('/bye'));

return $routes;