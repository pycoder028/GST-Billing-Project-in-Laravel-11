<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{
    public function dashboard(){
        if(Auth::User()->is_role ==1){
            return view('admin.dashboard');
        }
    }


    
} 