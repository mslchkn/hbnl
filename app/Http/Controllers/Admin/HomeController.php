<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Plugins\Plugin;

class HomeController extends Controller
{

    public function view()
    {
        $plugins = [];
        $pagePlugins = [
            'top_banner'
        ];

        foreach ((new Plugin())->all() as $plugin) {
            if(!empty(in_array($plugin->name, $pagePlugins))) {
                $plugin->active = true;
                $plugins[] = $plugin;
            }
        }

//        $plugins = new Plugin();
//        $plugins->top_banner->active = true;

        return view('admin-home',[
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
            'plugins' => $plugins
        ]);
    }
}
