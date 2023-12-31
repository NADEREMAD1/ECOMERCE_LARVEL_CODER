<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Catogries;
use App\Models\Produts;
use Illuminate\Http\Request;

class ProductssController extends Controller
{
    public function Showproducts(){

        $catagories = Catogries::paginate(6);

        $products = Produts::paginate(6);

        return view('admin.products.add_product', ['catagories' => $catagories , 'products' => $products]);
    }
    public function createproducts(ProductRequest $request){

        $image = $request->file('image');

        // Generate a unique name for the image
        $image_name = time() . $image->getClientOriginalName();

        // Move the uploaded image to the desired directory
        $image->move('image_products', $image_name);

        Produts::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'dec'=>$request->dec,
            'image'=>$image_name,
            'catogries_id' => $request->catogries_id,
        ]);
        return back();
    }
}
