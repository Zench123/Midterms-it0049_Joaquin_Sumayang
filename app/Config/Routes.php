<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Main pages
$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profiles', 'Profile::index');
$routes->get('/about', 'About::index');

// Customers
$routes->get('/customers', 'Customers::index',['filter' => 'auth']);

$routes->get('/customers/new', 'Customers::new',['filter' => 'auth']);
$routes->post('/customers/new', 'Customers::create',['filter' => 'auth']);

$routes->get('/customers/(:num)/edit', 'Customers::edit/$1',['filter' => 'auth']);
$routes->post('/customers/(:num)/edit', 'Customers::update/$1',['filter' => 'auth']);

// Users
$routes->get('/users', 'Users::index',['filter' => 'auth']);

$routes->get('/users/new', 'Users::new');
$routes->post('/users/new', 'Users::create');

$routes->get('/users/(:num)/edit', 'Users::edit/$1',['filter' => 'auth']);
$routes->post('/users/(:num)/edit', 'Users::update/$1',['filter' => 'auth']);


//tech4
//in
$routes->get('/login','Auth::login');
$routes->post('/login', 'Auth::authorize');


//out


$routes->get('/logout','Auth::logout');
//  $routes->post('/logout', 'Auth::authorize');
// // ['filter' => 'auth']
?>