<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function view()
    {
        return view('login');
    }
}
