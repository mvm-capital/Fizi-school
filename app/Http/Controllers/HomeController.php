<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('client.index');
    }
    public function aboutUs(){
        return view('client.about-us');
    }

    public function blog(){
        return view('client.blog');
    }

    public function blogDetail(){
        return view('client.blog_detail');
    }

    public function gallery(){
        return view('client.gallery');
    }

    public function contact(){
        return view('client.contact');
    }

    public function donate(){
        return view('client.donate');
    }
}
