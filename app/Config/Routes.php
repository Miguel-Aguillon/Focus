<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Inicio
$routes->get('/inicio', 'Inicio::inicio');

