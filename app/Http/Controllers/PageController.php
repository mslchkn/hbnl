<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;

class PageController extends Controller
{

    // blog
    // contacts




    public function about()
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


        return view('about',[
            'cart_sum' => $cart_sum,
            'current_page' => 'aboutus.page',
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
        ]);
    }

    public function contacts()
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


        return view('contacts',[
            'cart_sum' => $cart_sum,
            'current_page' => 'contacts.page',
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
        ]);
    }
}
