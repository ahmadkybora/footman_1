<?php

/**
 * this file for home route
 */
$router = new AltoRouter;

$router->map('GET', '/', '\App\Controllers\Front\Home\HomeController@index', 'home');