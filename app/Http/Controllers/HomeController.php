<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.auth.login');
    }

    public function forgot_password(){
        return view('pages.auth.forgot_password');
    }

    public function register(){
        return view('pages.auth.register');
    }

    public function admin(){
        return view('admin.auth.login');
    }
}
