<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{

    public function add(int $id)
    {
        $products = [];

        session_start();
        if (!empty($_SESSION[config('cart.cookie_name')])) {
            if (!empty($_SESSION[config('cart.cookie_name')][$id])) {
                $productQuantity = $_SESSION[config('cart.cookie_name')][$id];
            } else {
                $productQuantity = 0;
            }
            $_SESSION[config('cart.cookie_name')][$id] = ++$productQuantity;
        } else {
            $_SESSION[config('cart.cookie_name')] = [
                $id => 1
            ];
        }

        $cartProducts = $_SESSION[config('cart.cookie_name')];
        $sum = 0;
        foreach ($cartProducts as $product_id => $quantity) {
            $product = (new Product())->where('id', $product_id)->first();
            if ($quantity > 0) {
                $products[] = [
                    'item' => $product,
                    'quantity' => $quantity
                ];
                $sum += $quantity * $product['price'];
            }
        }

        return view('cart', [
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
            'products' => $products,
            'sum' => $sum
        ]);
    }

    public function change(int $id, int $sum)
    {
        $products = [];

        session_start();

        $_SESSION[config('cart.cookie_name')][$id] = $sum;

        $cartProducts = $_SESSION[config('cart.cookie_name')];

        $sum = 0;
        foreach ($cartProducts as $product_id => $quantity) {
            $product = (new Product())->where('id', $product_id)->first();
            if ($quantity > 0) {
                $products[] = [
                    'item' => $product,
                    'quantity' => $quantity
                ];
                $sum += $quantity * $product['price'];
            } else {

            }
        }

        return view('cart', [
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
            'products' => $products,
            'sum' => $sum
        ]);
    }

    public function getAll()
    {
        $products = [];

        session_start();

        $cartProducts = $_SESSION[config('cart.cookie_name')];
        $sum = 0;
        foreach ($cartProducts as $product_id => $quantity) {
            $product = (new Product())->where('id', $product_id)->first();
            if ($quantity > 0) {
                $products[] = [
                    'item' => $product,
                    'quantity' => $quantity
                ];
                $sum += $quantity * $product['price'];
            }
        }

        return view('cart', [
            'meta_title' => 'Редактировать главную страницу',
            'meta_description' => 'Редактировать главную страницу',
            'title' => 'Редактировать главную страницу',
            'products' => $products,
            'sum' => $sum
        ]);
    }

    public function send()
    {
        try {
            $t = Mail::to('maslechkin.dev@gmail.com');
        } catch (\Exception $e) {
            $errors = $e->getMessage();
            var_dump($e->getMessage());
        }

        return [
            'data' => !empty($t) ? $t : '',
            'errors' => !empty($errors) ? $errors : [],
        ];
    }
}
