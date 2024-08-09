<?php

use CodeIgniter\Router\RouteCollection;
//  Rutas de Index
/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Home::index");
$routes->get("index", "Home::index");
$routes->get("navbar", "Home::navbar");
$routes->get("quienes_somos", "Home::quienes_somos");
$routes->get('acercade', 'Home::acercade');
$routes->get('cards_autoridades', 'Home::cards_autoridades');
$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');
$routes->post('update_profile', 'Home::update_profile');


// Rutas del Registro de Usuarios
$routes->get('/registro', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');
$routes->post('/CrearUsuario', 'Usuario_controller::formValidationNuevoUsuario');

// Rutas del login
$routes->get('/login', 'Login_controller');
$routes->post('enviarlogin', 'Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');
$routes->get('/', 'Login_controller::logout');
$routes->get('CrearUsuario', 'Usuario_controller::create_usuario'); 
$routes->get('listado_usuario', 'Usuario_controller::listado'); 
$routes->get('usuario/ver_usuario/(:num)', 'Usuario_controller::ver_usuario/$1'); 
$routes->get('usuario/editar/(:num)', 'Usuario_controller::editar/$1');
$routes->post('usuario/modificar_usuario', 'Usuario_controller::modificar_usuario');
$routes->get('usuario/borrar_usuario/(:num)', 'Usuario_controller::borrar_usuario/$1');


