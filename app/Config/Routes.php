<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login','UsuarioController::login');
$routes->get('/login/inicio', 'FormularioController::index');
$routes->get('/login/registrar', 'FormularioController::formulario');
$routes->post('/login/crear/usuario', 'FormularioController::registrar');
