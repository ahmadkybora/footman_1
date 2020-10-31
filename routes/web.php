<?php

/**
 * this file for routing
 */
require_once __DIR__ . '/../routes/auth.php';

$router->map('GET', '/', '\App\Controllers\Front\Home\HomeController@index', 'home');
