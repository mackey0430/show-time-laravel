<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
     public function answer()
    {
        return view('answer.create');
    }

     public function send()
    {
        return view('answer.send');
    }

}
