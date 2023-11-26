<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CatogriesController;
use App\Http\Controllers\admin\ProductssController;
use App\Http\Controllers\user\memberController;
use App\Http\Controllers\User\ShopController;
use App\Models\Catogries;
use Illuminate\Support\Facades\Route;

// Start User Route

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ShopController::class)->group(function () {

    Route::get('/shop_view', 'shop_view')->name('shop_view');

    Route::get('/product_page/{id}', 'product_page');
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
// End User Route

// Start Admin Route
// dashboard Route

Route::controller(AdminController::class)->prefix('dashboard')->group(function () {

    Route::get('/', 'dashboard')->name('dashboard');

});

// Catagories Route
Route::controller(CatogriesController::class)->prefix('dashboard')->group(function () {

    Route::get('/Catagories', 'ShowCatagories')->name('ShowCatagories');

    Route::post('/createCatagories', 'createCatagories')->name('createCatagories');
});
// Products Route
Route::controller(ProductssController::class)->prefix('dashboard')->group(function () {

    Route::get('/products', 'Showproducts')->name('Showproducts');

    Route::post('/createproducts', 'createproducts')->name('createproducts');
});
