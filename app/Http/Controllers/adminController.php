<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){

        $isAuthenticated = Auth::check();
        return view('admin.dashboard', ['isAuthenticated' => $isAuthenticated]);
    }


}
