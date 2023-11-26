<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Catogries;
use App\Models\Produts;

class ShopController extends Controller
{


    public function shop_view()
    {
        $catagories = Catogries::paginate(6);

        $products = Produts::paginate(6);
        return view('User/shop', ['catagories' => $catagories ,'products' => $products]);
        // أو يمكنك استخدام الدالة compact
        // return view('User/shop', compact('catagories'));
    }

    public function product_page($id)
    {
        $data =  Produts::find($id);

        return view('User/product_page')->with('data',$data);
    }
}
