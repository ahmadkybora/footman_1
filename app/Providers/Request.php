<?php
/**
 * this class for request
 */

namespace App\Providers;

class Request extends Provider
{
    /**
     * this method can get all request
     *
     * @param bool $is_array
     * @return mixed
     */
    public static function all($is_array = false)
    {
        $result = [];

        if(count($_GET) > 0)
            $result['GET'] = $_GET;

        if(count($_POST) > 0)
            $result['POST'] = $_POST;

        $result['FILE'] =$_FILES;

        return json_decode(json_encode($result), $is_array);
    }

    /**
     * this method can get single request
     *
     * @param bool $is_array
     * @return mixed
     */
    public static function input($is_array = false)
    {
        $result = [];

        if(count($_GET) > 0)
            $result['get'] = $_GET;

        if(count($_POST) > 0)
            $result['post'] = $_POST;

        $result['file'] = $_FILES;

        return json_decode(json_encode($result), $is_array);
    }

    /**
     * get specific request type
     *
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        $data = self::all();
        return $data->$key;
    }

    /**
     * check request availability
     *
     * @param $key
     * @return bool
     */
    public static function has($key)
    {
        $object = new static;
        return (array_key_exists($key, $object->all(true))) ? true : false;
    }

    /**
     * get request data
     *
     * @param $key
     * @param $value
     * @return string
     */
    public static function old($key, $value)
    {
        $data = self::all();
        return isset($data->$key->$value) ? $data->$key->$value : '';
    }

    /**
     * this method for refresh request
     */
    public static function refresh()
    {
        $_GET = [];
        $_POST = [];
        $_FILES = [];
    }
}