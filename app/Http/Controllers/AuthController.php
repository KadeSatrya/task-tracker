<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function login(){

    }

    public function registerIndex(){
        return view('register');
    }

    public function register(){

    }

    public function logout(){

    }
}
