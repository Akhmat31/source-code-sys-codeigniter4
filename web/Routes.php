<?php
namespace Web;

use CodeIgniter\Router\RouteCollection;

$routes = \Config\Services::routes();

$routes->get('/', function () {
    echo "Hello World!";
}, [
    'as' => 'home',
    'set_the_title' => 'Home Page'
]);
