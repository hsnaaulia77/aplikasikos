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
$routes->group('admin', function($routes) {
    $routes->get('kamar', 'Admin\Kamar::index');
    $routes->get('kamar/create', 'Admin\Kamar::create');
    $routes->post('kamar/store', 'Admin\Kamar::store');
    $routes->get('kamar/(:num)/edit', 'Admin\Kamar::edit/$1');
    $routes->post('kamar/(:num)/update', 'Admin\Kamar::update/$1');
    $routes->get('kamar/(:num)/delete', 'Admin\Kamar::delete/$1');
    $routes->get('kamar/(:num)', 'Admin\Kamar::detail/$1');
    $routes->get('user', 'Admin\User::index');
    $routes->get('user/create', 'Admin\User::create');
    $routes->post('user/store', 'Admin\User::store');
    $routes->get('user/(:num)/edit', 'Admin\User::edit/$1');
    $routes->post('user/(:num)/update', 'Admin\User::update/$1');
    $routes->get('user/(:num)/delete', 'Admin\User::delete/$1');
    $routes->get('user/(:num)', 'Admin\User::detail/$1');
    $routes->get('penyewa', 'Admin\Penyewa::index');
    $routes->get('penyewa/create', 'Admin\Penyewa::create');
    $routes->post('penyewa/store', 'Admin\Penyewa::store');
    $routes->get('penyewa/(:num)/edit', 'Admin\Penyewa::edit/$1');
    $routes->post('penyewa/(:num)/update', 'Admin\Penyewa::update/$1');
    $routes->get('penyewa/(:num)/delete', 'Admin\Penyewa::delete/$1');
    $routes->get('penyewa/(:num)', 'Admin\Penyewa::detail/$1');
    $routes->get('penyewa/(:num)/riwayat/create', 'Admin\Penyewaan::create/$1');
    $routes->post('penyewa/(:num)/riwayat/store', 'Admin\Penyewaan::store/$1');
});
