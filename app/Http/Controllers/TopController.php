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
}
