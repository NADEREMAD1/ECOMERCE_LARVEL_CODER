<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_view(){
        return view('shop');
    }
    public function product_page(){
        return view('product_page');
    }

}
