<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;

class HomeController extends Controller
{

    public function view()
    {
        session_start();

        $cart_sum = 0;
        if(!empty($_SESSION[config('cart.cookie_name')])) {
            $cartProducts = $_SESSION[config('cart.cookie_name')];
            foreach ($cartProducts as $product_id => $quantity) {
                if($quantity == 0) {
                    unset($cartProducts[$product_id]);
                }
            }
            $_SESSION[config('cart.cookie_name')] = $cartProducts;
            $cart_sum = count($cartProducts);
        }

        $products = (new Product())->get();
        foreach($products as $product) {
            if($product['top'] == 1) {
                $top[] = $product;
            }
            if($product['best'] == 1) {
                $best[] = $product;
            }
        }
        return view('home',[
            'top' => !empty($top) ? $top : [],
            'best' => !empty($best) ? $best : [],
            'cart_sum' => $cart_sum,
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
        ]);
    }

    public function wait()
    {
        return view('empty');
    }
}
