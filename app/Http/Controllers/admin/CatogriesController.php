<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Catogries;
use Illuminate\Http\Request;

class CatogriesController extends Controller
{
    public function ShowCatagories(){
        return view('admin.catagories.add_cat');
    }

    public function createCatagories(Request $request){

        $image = $request->file('image');

        // Generate a unique name for the image
        $image_name = time() . $image->getClientOriginalName();

        // Move the uploaded image to the desired directory
        $image->move('image_Catagories', $image_name);

        Catogries::create([
            'title'=>$request->title,
            'image'=>$image_name,
        ]);
        return back();
    }
}
