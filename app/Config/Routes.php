<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página principal
$routes->get('/', 'Home::index');

//Inicio
$routes->get('/inicio', 'Inicio::inicio');

//login-log out
$routes->get('login', 'Auth::login');                    // para mostrar el formulario de login
$routes->post('auth/loginPost', 'Auth::loginPost');      // para procesar el POST
$routes->get('logout', 'Auth::logout');                  // para cerrar sesión

//logros
$routes->get('/logros', 'Logros::logros');

//niveles
$routes->get('/niveles','Niveles::niveles');

//categorias
$routes->get('/categorias', 'Categorias::categorias');

//retos
$routes->get('/retos', 'Retos::retos');

//congiguracion
$routes->get('/configuracion','Configuracion::configuracion');

//Lecciones
$routes->get('/lecciones','Lecciones::lecciones');

//perfil
$routes->get('/perfil','Perfil::perfil');

//Registro
$routes->get('/registro', 'Registro::index');            // mostrar formulario de registro
$routes->post('/registro/guardar', 'Registro::guardar'); // guardar usuario nuevo


// menú (opciones)

$routes->get('/categorias', 'Opciones::categorias');
$routes->get('/niveles', 'Opciones::niveles');
$routes->get('/retos', 'Opciones::retos');
$routes->get('/logros', 'Opciones::logros');
$routes->get('/lecciones', 'Opciones::lecciones');
$routes->get('/perfil', 'Usuarios::perfil');
$routes->get('/configuracion', 'Usuarios::configuracion');


// Dashboard Admin
$routes->get('admin', 'Admin::index', ['filter' => 'adminAuth']);
$routes->get('admin/dashboard', 'Admin::dashboard', ['filter' => 'adminAuth']);
$routes->get('admin/editarRol/(:num)', 'Admin::editarRol/$1', ['filter' => 'adminAuth']);
$routes->post('admin/actualizarRol/(:num)', 'Admin::actualizarRol/$1', ['filter' => 'adminAuth']);
$routes->get('admin/eliminarUsuario/(:num)', 'Admin::eliminarUsuario/$1', ['filter' => 'adminAuth']);
