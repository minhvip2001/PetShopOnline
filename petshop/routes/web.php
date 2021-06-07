<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth:web');

Route::group(['prefix'=>'/'],function(){
    Route::get('/', [
        App\Http\Controllers\HomeController::class,'index'
        ])->name('home');
    Route::get('tai-khoan/dang-nhap.html', [
        App\Http\Controllers\Admin\CustomerController::class,'login'
        ])->name('login');    
    Route::get('tai-khoan/dang-ki.html', [
        App\Http\Controllers\Admin\CustomerController::class,'register'
        ])->name('register');  
    // Chi tiết sản phẩm   
    Route::get('san-pham/{product_slug}', [
        App\Http\Controllers\Admin\ProductController::class,'show'
        ])->name('product');
    // Danh muc
    Route::get('/danh-cho-cho.html', [
        App\Http\Controllers\Admin\CategoryController::class,'show'
        ])->name('category');
    // Giỏ hàng
    Route::get('/add-product-to-cart/{id}', [
        App\Http\Controllers\Admin\CartController::class,'create'
        ])->name('cart.create'); 
    Route::get('/update-cart', [
        App\Http\Controllers\Admin\CartController::class,'edit'
        ])->name('cart.update');     
    Route::get('/gio-hang.html', [
        App\Http\Controllers\Admin\CartController::class,'index'
        ])->name('cart');
    // Checkout
    Route::get('/thanh-toan.html', [
        App\Http\Controllers\Admin\OrderController::class,'show'
        ])->name('checkout');
            
    // Route::get('/changepass', [
    //     App\Http\Controllers\HomeController::class,'changePass'
    //     ])->name('profile.pass');
    // Route::post('/updatepass', [
    //     App\Http\Controllers\HomeController::class,'updatePass'
    //     ]);
    
});