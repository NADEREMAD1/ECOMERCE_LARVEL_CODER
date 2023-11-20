<?php

use App\Http\Controllers\user\memberController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('Register', [memberController::class, 'Register'])->name('Register');

Route::get('login', [memberController::class, 'login'])->name('login');
