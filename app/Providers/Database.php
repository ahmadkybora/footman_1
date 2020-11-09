<?php
/**
 *
 */

namespace App\Providers;


class Database
{
    public function __construct()
    {
        try {
            return new \PDO(
                getenv('DB_DRIVER'), // DB_DRIVER
                getenv('DB_HOST'), // DB_HOST
                getenv('DB_NAME'), // DB_NAME
                getenv('DB_USERNAME'), // DB_USERNAME
                getenv('DB_PASSWORD') // DB_PASSWORD
            );
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

//    protected function getPDO()
//    {
//        $pdo = new \PDO(
//            getenv('DB_DRIVER'), // DB_DRIVER
//            getenv('DB_HOST'), // DB_HOST
//            getenv('DB_NAME'), // DB_NAME
//            getenv('DB_USERNAME'), // DB_USERNAME
//            getenv('DB_PASSWORD') // DB_PASSWORD
//        );
//
//        return $pdo;
//    }
}

//$database = new Database();