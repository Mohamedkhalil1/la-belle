<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show(){
        return view('shop.show');
    }

    public function showProduct(){
        return view('product.details');
    }
}