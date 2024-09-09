<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{
    public function login(Request $request){
        $data['meta_title'] = 'Login Page';
        
        return view('auth.login', $data);
    }

    
    public function register(Request $request){
        $data['meta_title'] = 'Register Page';

        return view('auth.register', $data);
    }

    public function forgot_password(Request $request){
        $data['meta_title'] = 'Forgot Password Page';
        return view('auth.forgot_password', $data);
    }

}

