<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Catogries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.welcomeAdmin');
    }
    // Log in Admin
        // Example: AdminController.php
        public function __construct()
        {
            $this->middleware('web');
        }
    public function show_login_admin()
    {
        return view('admin.login.login');
    }
    public function create_login_admin(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the admin
        $credentials = $request->only('email', 'password');
        // if (Auth::guard('admin')->attempt($credentials)) {
        //     // Authentication passed
        //     return redirect()->route('dashboard');
        // } else {
        //     // Authentication failed
        //     return redirect()->route('admin.login')->with('error', 'Invalid credentials');
        // }
        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('dashboard');
        } else {
            // Authentication failed
            return redirect()->route('admin.login')->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    // Create New Admin
    public function show_register()
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
        // $token = $Cr_admin->createToken($Cr_admin->email)->plainTextToken;

        // $response = [
        //     'name' => $Cr_admin->name,
        //     'email' => $Cr_admin->email,
        //     'token' => $token,
        // ];
        return back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('show_login_admin');
    }
}
