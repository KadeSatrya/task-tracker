<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function login(){
        $validated = request()->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
        );

        if(auth()->attempt($validated)){
            request()->session()->regenerate();
            return redirect()->route('home.index');
        }

        return redirect()->route('login');
    }

    public function registerIndex(){
        return view('register');
    }

    public function register(){
        $validated = request()->validate(
            [
                'name'=>'required|min:1',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|confirmed'
            ]
        );
        
        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]
        );

        return redirect()->route('login');
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}
