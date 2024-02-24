<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get ('/', [HomeController::class,'index']);


//buat route prefix
Route::prefix('product')->group(function(){
    Route::get ('/food-beverage', [ProductController::class,'foodBeverage']);
    Route::get ('/beauty-health', [ProductController::class,'beautyHealth']);
    Route::get('profile', function(){
        return 'admin profile';
    });
    Route::get('user', function(){
        return 'admin user';
    });
});


