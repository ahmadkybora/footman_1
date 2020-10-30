<?php
/**
 * this class for authorization
 */
namespace App\Controllers\Auth;

use App\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * this method for view login
     */
    public function showLoginForm()
    {
        return view('auth/login');
    }

    public function login()
    {

    }

    /**
     * this method for register view
     */
    public function showRegisterForm()
    {
        return view('auth/register');
    }

    public function register()
    {

    }

    public function logout()
    {

    }
}