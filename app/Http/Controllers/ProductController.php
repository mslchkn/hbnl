<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;

class ProductController extends Controller
{

    public function getOne($id)
    {
        $product = (new Product())->where('id', $id)->first();
        return view('product',[
            'product' => $product,
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу'
        ]);
    }

    public function getAll()
    {
        session_start();
        $cartProducts = !empty($_SESSION[config('cart.cookie_name')]) ? $_SESSION[config('cart.cookie_name')] : [];
        $cart_sum = count($cartProducts);

        $products = (new Product())->get();
        return view('products',[
            'cart_sum' => $cart_sum,
            'products' => $products,
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу'
        ]);
    }
}
