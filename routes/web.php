<?php

use App\Http\Controllers\user\memberController;
use App\Http\Controllers\User\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ShopController::class)->group(function () {

    Route::get('/shop_view', 'shop_view')->name('shop_view');
    Route::get('/product_page', 'product_page')->name('product_page');

});
Route::controller(memberController::class)->group(function () {

    // show registerUser
    Route::get('registerUser', 'show_Register')->name('show_Register');

// registerUser
Route::post('Register', 'Register')->name('new_Register');

// show LoginUser
Route::get('loginUser', 'show_login')->name('show_login');
// LoginUser
    Route::get('login', 'login')->name('new_login');
});



