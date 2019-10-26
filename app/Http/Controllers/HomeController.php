<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function view()
    {
        return view('home');
    }

    public function wait()
    {
        return view('empty');
    }
}
