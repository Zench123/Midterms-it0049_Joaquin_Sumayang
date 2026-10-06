<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */



// Main pages
$routes->get('/', 'Home::index');

// $routes->get('/tasks', 'Tasks::index');
// $routes->get('/profiles', 'Profile::index');
$routes->get('/about', 'About::index');






// Customers
//list customers
$routes->get('/customers', 'Customers::index',['filter' => 'auth']);
//create
$routes->get('/customers/new', 'Customers::new',['filter' => 'auth']);
$routes->post('/customers/new', 'Customers::create',['filter' => 'auth']);


//edit
$routes->get('/customers/(:num)/edit', 'Customers::edit/$1',['filter' => 'auth']);
$routes->post('/customers/(:num)/edit', 'Customers::update/$1',['filter' => 'auth']);




$routes->post('/customers/(:num)/delete', 'customers::delete/$1',['filter' => 'auth']);//delete
//delete
$routes->get('/customers/(:num)/delete', 'customers::delete/$1',['filter' => 'auth']);//delete


// Users

//list of users
$routes->get('/users', 'Users::index',['filter' => 'auth']);
//create users
$routes->get('/users/new', 'Users::new',['filter' => 'auth']);
$routes->post('/users/new', 'Users::create',['filter' => 'auth']);


//edit user data
$routes->get('/users/(:num)/edit', 'Users::edit/$1',['filter' => 'auth']);
$routes->post('/users/(:num)/edit', 'Users::update/$1',['filter' => 'auth']);


$routes->post('/users/(:num)/delete', 'Users::delete/$1',['filter' => 'auth']);//delete


//logging routes
//in 
$routes->get('/login','Auth::login');
$routes->post('/login', 'Auth::authorize');
//out
$routes->get('/logout','Auth::logout');



//Products 


//edit
$routes->get('/Products/(:num)/edit', 'Products::edit/$1',['filter' => 'auth']);
$routes->post('/Products/(:num)/edit', 'Products::update/$1',['filter' => 'auth']);

//list items
$routes->get('/Products', 'Products::index',['filter' => 'auth']);
//create
$routes->get('/Products/new', 'Products::new',['filter' => 'auth']);
$routes->post('/Products/new', 'Products::create',['filter' => 'auth']);

$routes->get('/Products/(:num)/delete', 'Products::delete/$1',['filter' => 'auth']);//delete





//sales routes




//  $routes->post('/logout', 'Auth::authorize');
// // ['filter' => 'auth']
?>