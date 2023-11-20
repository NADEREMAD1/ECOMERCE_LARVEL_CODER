<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop_view(){
        return view('User/shop');
    }

    public function product_page(){
        return view('User/product_page');
    }
}
