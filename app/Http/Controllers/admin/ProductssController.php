<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produts;
use Illuminate\Http\Request;

class ProductssController extends Controller
{
    public function Showproducts(){

        return view('admin.products.add_product');
    }

    public function createproducts(Request $request){

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
        ]);
        return back();
    }
}