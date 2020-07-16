<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function post_create()
    {
        return view('post_create');
    }

    public function answer()
    {
        return view('answer');
    }

    public function profile()
    {
        return view('profile');
    }

    public function setting()
    {
        return view('setting');
    }

     public function timeline()
    {
        return view('timeline');
    }
    
}
