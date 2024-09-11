<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PartieTypeController extends Controller{
    public function parties_type(){
        
        return view("admin.parties_type.list");
    }
    public function parties_type_add(Request $request){
        return view('admin.parties_type.add');
    }


}