<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Inicio
$routes->get('/inicio', 'Inicio::inicio');

//Login
$routes->get('/login', 'Login::login');

//Logros
$routes->get('/logros', 'Logros::logros');

//Niveles
$routes->get('/niveles','Niveles::niveles');

//Categorias
$routes->get('/categorias', 'Categorias::categorias');

//Logros
$routes->get('/logros','Logros::logros');

//Retos
$routes->get('/retos', 'Retos::retos');

//Configuracion
$routes->get('/configuracion','Configuracion::configuracion');

//Lecciones
$routes->get('/lecciones','Lecciones::lecciones');

//Perfil
$routes->get('/perfil','Perfil::perfil');

//Registro
$routes->get('/registro','Registro::registro');