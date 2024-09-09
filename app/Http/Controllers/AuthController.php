<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    public function login(Request $request){
        $data['meta_title'] = 'Login Page';
        
        return view('auth.login', $data);
    }

    
    public function register(Request $request){
        $data['meta_title'] = 'Register Page';

        return view('auth.register', $data);
    }

    public function register_post(Request $request){
        /* dd($request->all()); */

        $user = request()->validate([
            'name' => 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required|min:6'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);

        $user->save();

        return redirect('/')->with('success', 'Register Successfully.');

    }

    public function forgot_password(Request $request){
        $data['meta_title'] = 'Forgot Password Page';
        return view('auth.forgot_password', $data);
    }

}

