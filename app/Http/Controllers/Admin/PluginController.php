<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PluginController extends Controller
{

    public function view()
    {
        return view('admin-plugins');
    }
}
