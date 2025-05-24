<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'noauth']);
$routes->get('/about', 'Home::about', ['filter' => 'noauth']);
$routes->get('/contact', 'Home::contact', ['filter' => 'noauth']);
$routes->get('/signup', 'Home::signup', ['filter' => 'noauth']);
$routes->get('/login', 'Home::login', ['filter' => 'noauth']);
$routes->get('/dashboard', 'Home::dashboard', ['filter' => 'auth']);
