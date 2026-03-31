<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function () {
    if (session()->get('user_id')) {
        return redirect()->to('/dashboard');
    } else {
        return redirect()->to('/login');
    }
});


$routes->get('/register', 'Auth::register');
$routes->post('/store', 'Auth::store');

$routes->get('/login', 'Auth::login');
$routes->post('/loginAuth', 'Auth::loginAuth');

$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');


$routes->get('/create', 'Post::create');
$routes->post('/storePost', 'Post::store');
$routes->get('/edit/(:num)', 'Post::edit/$1');
$routes->post('/update/(:num)', 'Post::update/$1');
$routes->get('/delete/(:num)', 'Post::delete/$1');
$routes->get('/posts', 'Post::index');


