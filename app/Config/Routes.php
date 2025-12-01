<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Rutas del menú

// test base de datos
$routes->get('/test_db', 'TestDB::index');


$routes->get('/', 'Inicio::index');
$routes->get('/categorias', 'Categorias::index');
$routes->get('/inicio', 'Inicio::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/autenticar', 'Login::autenticar');
$routes->get('/logout', 'Login::logout');
$routes->get('/registro', 'Registro::index');
$routes->post('/registro/registrar', 'Registro::registrar');
$routes->get('/perfil', 'Perfil::index');
$routes->get('/niveles', 'Niveles::index');
$routes->get('/logros', 'Logros::index');
$routes->get('/retos', 'Retos::index');

//auth o verificacion 
$routes->post('auth/loginPost', 'Auth::loginPost');
$routes->get('auth/logout', 'Auth::logout');

// categorias
$routes->get('categorias', 'Categorias::index');

//rutas para registro
// Registro de usuario
$routes->get('registro', 'Registro::index');
$routes->post('registro/guardar', 'Registro::guardar');

// Vista de registro exitoso
$routes->get('registroexitoso', function () {
    return view('registroexitoso');
});

//Perfil
$routes->get('perfil', 'Perfil::index');
//Rutas de apartados de lecciones
$routes->get('lecciones/(:num)', 'Lecciones::listado/$1');
$routes->get('lecciones/detalle/(:num)', 'Lecciones::detalle/$1');
$routes->get('lecciones/completar/(:num)', 'Lecciones::completar/$1');
$routes->get('lecciones/quiz/(:num)', 'Lecciones::quiz/$1');
$routes->post('lecciones/evaluar', 'Lecciones::evaluar');
//ruta para guardar registro
$routes->post('registro/guardar', 'Registro::guardar');
// Lecciones por categoría
$routes->get('lecciones/(:segment)', 'Lecciones::categoria/$1');
// Retos diarios
$routes->get('retos', 'Retos::index');
// Configuración
$routes->get('configuracion', 'Configuracion::index');