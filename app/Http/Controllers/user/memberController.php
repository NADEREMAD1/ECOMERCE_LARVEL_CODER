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
   // Register User
   public function Register(UserRequest $request){

    $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'image'=>$request->image,
    ]);
    // create Token From User
    $token = $user->createToken($user->email)->plainTextToken;
    $response = [
        'name' => $user->name,
        'email' => $user->email,
        'token' => $token,
    ];
    return response()->json($response , 200);

}
// login User
public function login(Request $request){

    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors());
    }

    if(Auth::attempt(['email' => $request->email, 'password' =>$request-> password])){
        $user= Auth::user();
        $res = [
            'name' => $user->name,
            'token' => $user->createToken($user->email)->plainTextToken,
        ];
    return response()->json($res,200);
        }
        else{
        return response()->json(['error'=>'unauthorised']);
    }
   }

}
