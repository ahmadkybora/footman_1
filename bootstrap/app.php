<?php
/**
 * this file for starting app
 */


/**
 * start session if not already started
 */
if(!isset($_SESSION))
    session_start();

/**
 * this statement for create database table
 */
//require_once __DIR__ . '/../database/migrations/Create-Categories-Table.php';
//require_once __DIR__ . '/../database/migrations/Create-Users-Table.php';

/**
 * load environment variable
 */
require_once __DIR__.'/../config/database.php';

/**
 * this instance for connection
 */
new App\Providers\Connection();

/**
 * set custom error handler
 */
//set_error_handler([new \App\Exceptions\ErrorHandler(), 'handleErrors']);

/**
 * this instance for load all directory web (routes)
 */
require_once __DIR__.'/../routes/web.php';


/**
 * this instance for router
 */
new \App\Providers\Route($router);