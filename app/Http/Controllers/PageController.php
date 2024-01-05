<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function program()
    {
        return view('program');
    }

    public function activities()
    {
        return view('activities');
    }
}
