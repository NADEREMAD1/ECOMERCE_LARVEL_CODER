<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class memberController extends Controller
{

    // show Login
    public function show_Register()
    {
        return view('User.login.register');
    }
    // Register User
    public function Register(UserRequest $request)
    {
        // Check if an image is uploaded
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            // Generate a unique name for the image
            $image_name = time() . $image->getClientOriginalName();

            // Move the uploaded image to the desired directory
            $image->move('image_member', $image_name);
        } else {

            // If no image is uploaded, set $image_name to null
            $image_name = null;
        }

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $image_name,
        ]);
        // create Token From User
        $token = $user->createToken($user->email)->plainTextToken;
        $response = [
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token,
        ];
        // return response()->json($response, 200);
        return view('welcome');
    }

    // show Login
    public function show_login()
    {
        return view('User.login.login');
    }

    // login User
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $res = [
                'name' => $user->name,
                'token' => $user->createToken($user->email)->plainTextToken,
            ];
            // return response()->json($res, 200);
            return view('welcome');
        } else {
            return response()->json(['error' => 'unauthorised']);
        }
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return view('User.login.login');
    }


    public function show_profile(){
        return view('User.profile');
    }
}
