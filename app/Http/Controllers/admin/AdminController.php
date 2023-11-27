<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Catogries;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.welcomeAdmin');
    }
    public function login_admin()
    {
        return view('admin.login.login');
    }
    public function show_register_admin()
    {
        return view('admin.login.register');
    }

    public function create_admin(AdminRequest $request)
    {
        $img = $request->file('image');

        $image_name = time() . $img->getClientOriginalName();

        $img->move('admin_register', $image_name);

        $Cr_admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $image_name,
        ]);

        //   create Token From Admin
        $token = $Cr_admin->createToken($Cr_admin->email)->plainTextToken;

        $response = [
            'name' => $Cr_admin->name,
            'email' => $Cr_admin->email,
            'token' => $token,
        ];
        return back();
    }
}
