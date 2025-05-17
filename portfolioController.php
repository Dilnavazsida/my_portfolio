<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    function hm(){
        return view('home');
    }

    function ab(){
        return view('about');
    }

    function wk(){
        return view('work');
    }

    function skl(){
        return view('skills');
    }

    function con(){
        return view('contact');
    }
}
