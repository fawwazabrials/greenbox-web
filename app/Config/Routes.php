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

$routes->get('/admin/product', 'AdminProductController::index');
$routes->get('/admin/product/(:num)', 'AdminProductController::show/$1');
$routes->post('/admin/product/(:num)', 'AdminProductController::editProductDetail/$1');
$routes->post('/admin/product/(:num)/request', 'AdminProductController::requestPlant/$1');

$routes->get('/admin/order', 'OrderController::index');
$routes->get('/admin/order/(:num)', 'OrderController::show/$1');

$routes->get('/admin/report', 'ReportController::index');

// API Routes
$routes->get('/api/order', 'OrderAPIController::index');
$routes->get('/api/order/(:num)', 'OrderAPIController::show/$1');
$routes->get('/api/order/report', 'OrderAPIController::showReport');

$routes->get('/api/product', 'ProductAPIController::index');
$routes->get('/api/product/(:num)', 'ProductAPIController::show/$1');
$routes->put('/api/product/add-stock', 'ProductAPIController::addStock');
