<?php
/**
 * this class for connection to database
 *
 */
namespace App\Providers;

use Illuminate\Database\Capsule\Manager as DB;

/**
 * this method for config to env file for connection database
 * Class Connection
 * @package App\Providers
 */
class Connection extends Provider
{
    public function __construct()
    {
        $db = new DB();

        $db->addConnection([
            'driver' => getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'database' => getenv('DB_NAME'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $db->setAsGlobal();
        $db->bootEloquent();
    }
}