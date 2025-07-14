<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingPage::index');
$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->get('forgot-password', 'Auth::forgotPassword');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('admin', 'Admin::index', ['filter' => 'admin']);
