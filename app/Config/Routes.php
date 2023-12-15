<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->get('/product/(:num)', 'ProductController::show/$1');
$routes->post('/product/(:num)', 'ProductController::show/$1');
