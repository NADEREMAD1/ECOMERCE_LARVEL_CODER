<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CatogriesController;
use App\Http\Controllers\admin\ProductssController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\user\memberController;
use App\Http\Controllers\User\ShopController;
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

    // show Login User
    Route::get('loginUser', 'show_login')->name('show_login');
    // Login User
    Route::get('login', 'login')->name('login');

    // Logout User
    Route::get('logout', 'logout')->name('logout');

    // show profile User
    Route::get('profile', 'show_profile')->name('show.profile');

});

Route::controller(ContactUSController::class)->group(function ()  {

Route::get('contactUs','show_contact')->name('show.contact');

Route::post('create','create')->name('create.contact');

});
// End User Route











// Start Admin Route
// dashboard Route

Route::controller(AdminController::class)->prefix('dashboard')->group(function () {

    Route::get('/', 'dashboard')->name('dashboard')->middleware('CheckAdmin');

    Route::get('/login', 'show_login_admin')->name('show.login.admin')->middleware('CheckAdmin');

    Route::post('/don_login', 'create_login_admin')->name('create.login.admin')->middleware('CheckAdmin');


    Route::get('/register_admin', 'show_register')->name('show_register')->middleware('CheckAdmin');

    Route::post('/create_admin', 'create_admin')->name('create_admin')->middleware('CheckAdmin');

    Route::get('/logout', 'logout')->name('logout.admin')->middleware('CheckAdmin');

});

// Catagories Route
Route::controller(CatogriesController::class)->prefix('dashboard')->group(function () {

    Route::get('/Catagories', 'ShowCatagories')->name('Show.Catagories')->middleware('CheckAdmin');

    Route::post('/createCatagories', 'createCatagories')->name('create.Catagories')->middleware('CheckAdmin');
});
// Products Route
Route::controller(ProductssController::class)->prefix('dashboard')->group(function () {

    Route::get('/products', 'Showproducts')->name('Show.products')->middleware('CheckAdmin');

    Route::post('/createproducts', 'createproducts')->name('create.products')->middleware('CheckAdmin');
});
