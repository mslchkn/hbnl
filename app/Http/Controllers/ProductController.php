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
}
