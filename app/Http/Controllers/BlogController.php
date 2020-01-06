<?php

namespace App\Http\Controllers;

use App\Http\Models\Category;
use App\Http\Models\Product;

class BlogController extends Controller
{

    public function getOne($id)
    {
        $product = (new Product())->where('id', $id)->first();
        return view('blog_item',[
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
        $categories = (new Category())->get();
        return view('blog_list',[
            'cart_sum' => $cart_sum,
            'products' => $products,
            'categories' => $categories,
            'current_page' => 'catalog.page',
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу'
        ]);
    }
}
