<?php
/**
 * this class for home web
 */

namespace App\Controllers\Front\Home;

use App\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;

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
        $users = new UserRepository();
        $users->all();
        dd($users);
        /*return view('front/home/index');*/
    }
}