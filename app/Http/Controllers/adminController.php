<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function show(){
        return view('admin.dashboard');
    }

   
}
