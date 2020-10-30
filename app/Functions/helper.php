<?php
/**
 * this file for helper functions
 */
use Philo\Blade\Blade;

/**
 * this method for make view in directory resources
 * @param $path
 * @param array $data
 */
if(!function_exists('view')) {
    function view($path, array $data = [])
    {
        $view = __DIR__ . '/../../resources/views';
        $catch = __DIR__ . '/../../bootstrap/cache';

        $blade = new Blade($view, $catch);
        echo $blade->view()->make($path, $data)->render();
    }
}

/**
 * this method is var dumper
 */
if(! function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            var_dump($v);
        }

        exit(1);
    }
}

/**
 * this method for base path
 *
 * @param $value
 * @return mixed
 */
if(! function_exists('base_path')) {
    function base_path($value)
    {
        return require_once __DIR__ . '/../../' . $value;
    }
}

/**
 * this method for storage path
 *
 * @param $value
 * @return mixed
 */
if(! function_exists('storage_path')) {
    function storage_path($value)
    {
        return require_once __DIR__ . '/../../storage' . $value;
    }
}