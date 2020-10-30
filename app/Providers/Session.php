<?php
/**
 * Created by PhpStorm.
 * User: kybora
 * Date: 10/30/2020
 * Time: 9:36 PM
 */

namespace App\Providers;

class Session extends Provider
{
    /**
     * create the session
     *
     * @param $name
     * @param $value
     * @return mixed
     * @throws \Exception
     */
    public static function add($name, $value)
    {
        if($name != '' and !empty($name) and $value != '' and !empty($value))
            return $_SESSION[$name] = $value;

        throw new \Exception('Name and Value is required');
    }

    /**
     * get value from session
     *
     * @param $name
     * @return mixed
     */
    public static function get($name)
    {
        return $_SESSION[$name];
    }

    /**
     * check is session exists
     *
     * @param $name
     * @return bool
     * @throws \Exception
     */
    public static function has($name)
    {
        if($name != '' and !empty($name))
            return (isset($_SESSION[$name])) ? true : false;

        throw new \Exception('name is required');
    }

    /**
     * remove the session
     *
     * @param $name
     * @throws \Exception
     */
    public static function remove($name)
    {
        if(self::has($name))
            unset($_SESSION[$name]);
    }
}