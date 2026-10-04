<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Main pages
$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profiles', 'Profile::index');
$routes->get('/about', 'About::index');

// Customers
$routes->get('/customers', 'Customers::index');

$routes->get('/customers/new', 'Customers::new');
$routes->post('/customers/new', 'Customers::create');

$routes->get('/customers/(:num)/edit', 'Customers::edit/$1');
$routes->post('/customers/(:num)/edit', 'Customers::update/$1');

// Users
$routes->get('/users', 'Users::index');

$routes->get('/users/new', 'Users::new');
$routes->post('/users/new', 'Users::create');

$routes->get('/users/(:num)/edit', 'Users::edit/$1');
$routes->post('/users/(:num)/edit', 'Users::update/$1');