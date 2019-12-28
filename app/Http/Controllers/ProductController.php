<?php

namespace App\Http\Controllers;

use App\Http\Models\Category;
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
        $categories = (new Category())->get();
        return view('products',[
            'cart_sum' => $cart_sum,
            'products' => $products,
            'categories' => $categories,
            'current_page' => 'catalog.page',
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу'
        ]);
    }

    public function getAllByCategory(int $category_id)
    {
        session_start();
        $cartProducts = !empty($_SESSION[config('cart.cookie_name')]) ? $_SESSION[config('cart.cookie_name')] : [];
        $cart_sum = count($cartProducts);

        $products = (new Product())->where(['category_id' => $category_id])->get();
        $categories = (new Category())->get();
        return view('products',[
            'cart_sum' => $cart_sum,
            'products' => !empty($products) ? $products : [],
            'categories' => $categories,
            'current_page' => 'catalog.category.page.' . $category_id,
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу'
        ]);
    }
}
