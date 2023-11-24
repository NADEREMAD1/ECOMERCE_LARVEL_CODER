<?php

use App\Http\Controllers\admin\CatogriesController;
use App\Http\Controllers\admin\ProductssController;
use App\Http\Controllers\user\memberController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CatogriesController::class)->group(function () {

    Route::get('/ShowCatagories', 'ShowCatagories')->name('ShowCatagories');

    Route::post('/createCatagories', 'createCatagories')->name('createCatagories');

});
Route::controller(ProductssController::class)->group(function () {

    Route::get('/Showproducts', 'Showproducts')->name('Showproducts');

    Route::post('/createproducts', 'createproducts')->name('createproducts');

});
