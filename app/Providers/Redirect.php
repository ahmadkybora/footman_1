<?php

/**
 * this method for redirect to route
 */
namespace App\Providers;

class Redirect extends Provider
{
    /**
     * redirect to specific page
     *
     * @param $page
     */
    public static function to($page)
    {
        header("location: $page");
        exit;
    }

    /**
     * redirect to same page
     */
    public function back()
    {
        $uri = $_SERVER['REQUEST_URI'];
        header("location: $uri");
    }
}