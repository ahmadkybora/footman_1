<?php
/**
 * this file for helper functions
 */
use Philo\Blade\Blade;
use App\Providers\Session;

if(!function_exists('view'))
{
    /**
     * this method for make view in directory resources
     *
     * @param $path
     * @param array $data
     */
    function view($path, array $data = [])
    {
        $view = __DIR__ . '/../../resources/views';
        $catch = __DIR__ . '/../../bootstrap/cache';

        $blade = new Blade($view, $catch);
        echo $blade->view()->make($path, $data)->render();
    }
}

if(!function_exists('make'))
{
    /**
     * @param $fileName
     * @param $data
     * @return false|string
     */
    function make($fileName, $data)
    {
        extract($data);

        /**
         * this down statement turn on output buffering
         */
        ob_start();

        /**
         * this down statement for include page or template
         */
        include_once __DIR__ . '/../../resources/views/mails' . $fileName . 'blade.php';

        /**
         * this down statement for get content of the file
         */
        $content = ob_get_contents();

        /**
         * this down statement erase the output and turn off output buffering
         */
        ob_end_clean();

        return $content;
    }
}

if(! function_exists('dd'))
{
    /**
     * this method is var dumper
     *
     * @param mixed ...$vars
     */
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            var_dump($v);
        }

        exit(1);
    }
}

if(! function_exists('base_path'))
{
    /**
     * this method for base path
     *
     * @param $path
     * @return mixed
     */
    function base_path($path)
    {
        return require_once __DIR__ . '/../../' . $path;
    }
}

if(! function_exists('storage_path'))
{
    /**
     * this method for storage path
     *
     * @param $path
     * @return mixed
     */
    function storage_path($path)
    {
        return require_once __DIR__ . '/../../storage' . $path;
    }
}

if(! function_exists('public_path'))
{
    /**
     * this method for public path
     *
     * @param $path
     * @return mixed
     */
    function public_path($path)
    {
        return require_once __DIR__ . '/../../public' . $path;
    }
}

if(! function_exists('CSRFToken'))
{
    /**
     * this method for generate token
     * @throws Exception
     */
    function CSRFToken()
    {
        if(!Session::has('token'))
        {
            $random_token = base64_encode(openssl_random_pseudo_bytes(32));
            Session::add('token', $random_token);
        }
        Session::get('token');
    }
}

if(! function_exists('verifyCSRFToken'))
{
    /**
     * this method for verify CSRFToken
     * @param $requestToken
     * @return bool
     * @throws Exception
     */
    function verifyCSRFToken($requestToken)
    {
        if(Session::has('token') and Session::get('token') === $requestToken)
            return true;
        return false;
    }
}