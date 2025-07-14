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
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/admin', 'Dashboard::admin');
$routes->get('dashboard/user', 'Dashboard::user');
$routes->get('admin', 'Admin::index');
$routes->group('admin', function($routes) {
    $routes->get('kamar', 'Admin\Kamar::index');
    $routes->get('kamar/create', 'Admin\Kamar::create');
    $routes->post('kamar/store', 'Admin\Kamar::store');
    $routes->get('kamar/(:num)/edit', 'Admin\Kamar::edit/$1');
    $routes->post('kamar/(:num)/update', 'Admin\Kamar::update/$1');
    $routes->get('kamar/(:num)/delete', 'Admin\Kamar::delete/$1');
    $routes->get('kamar/(:num)', 'Admin\Kamar::detail/$1');
});
