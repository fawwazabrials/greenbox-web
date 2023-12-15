<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->get('/product/(:num)', 'ProductController::show/$1');
$routes->post('/product/(:num)', 'ProductController::show/$1');

$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');
