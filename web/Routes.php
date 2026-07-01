<?php
$routes = \Config\Services::routes();

$routes->get('/', "Home::index", [
    'as' => 'home',
    'set_the_title' => 'Home Page'
]);