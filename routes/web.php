<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$router->get('/', [
//    'as' => 'get.homepage',
//    'uses' => 'HomeController@view'
//]);

$router->get('/', [
    'as' => 'get.wait',
    'uses' => 'HomeController@wait'
]);

$router->get('/login', [
    'as' => 'get.homepage',
    'uses' => 'Admin\AuthController@view'
]);

$router->get('/admin', [
    'as' => 'get.homepage',
    'uses' => 'Admin\AdminController@view'
]);

$router->get('/admin/home', [
    'as' => 'edit.homepage',
    'uses' => 'Admin\HomeController@view'
]);

$router->get('/admin/cart', [
    'as' => 'edit.cart',
    'uses' => 'Admin\CartController@view'
]);

$router->get('/admin/settings', [
    'as' => 'edit.settings',
    'uses' => 'Admin\SettingsController@view'
]);

$router->get('/admin/product', [
    'as' => 'edit.settings',
    'uses' => 'Admin\ProductController@view'
]);

$router->get('/admin/products', [
    'as' => 'edit.settings',
    'uses' => 'Admin\ProductsController@view'
]);


