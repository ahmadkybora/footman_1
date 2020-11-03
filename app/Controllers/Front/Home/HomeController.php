<?php
/**
 * this class for home web
 */

namespace App\Controllers\Front\Home;

use App\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * this method for index web
     */
    public function index()
    {
/*        $users = User::create([
            'username' => 'ahmad',
            'first_name' => 'ahmad',
            'last_name' => 'montazeri',
        ]);*/
        $users = User::all();
        dd($users);
        /*return view('front/home/index');*/
    }
}