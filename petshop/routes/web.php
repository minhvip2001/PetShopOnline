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
// Login

Route::group(['prefix'=>'/'],function(){
    Route::get('/', [
        App\Http\Controllers\HomeController::class,'index'
        ])->name('home');
    Route::get('tai-khoan/dang-nhap.html', [
        App\Http\Controllers\Admin\CustomerController::class,'login'
        ])->name('login');  
    Route::post('tai-khoan/dang-nhap.html', [
        App\Http\Controllers\Admin\CustomerController::class,'login'
        ])->name('login');        
    Route::get('tai-khoan/dang-ki.html', [
        App\Http\Controllers\Admin\CustomerController::class,'register'
        ])->name('register');
    Route::post('tai-khoan/dang-ki.html', [
        App\Http\Controllers\Admin\CustomerController::class,'register'
        ])->name('register');    
    Route::get('tai-khoan/dang-xuat.html', [
        App\Http\Controllers\Admin\CustomerController::class,'logout'
        ])->name('logout'); 
    Route::get('tai-khoan/thong-tin-tai-khoan.html', [
        App\Http\Controllers\Admin\CustomerController::class,'profile'
        ])->name('profile')->middleware('auth:web');
    Route::get('tai-khoan/dia-chi.html', [
        App\Http\Controllers\Admin\CustomerController::class,'address'
        ])->name('address')->middleware('auth:web');
    Route::get('tai-khoan/don-hang/{id}', [
        App\Http\Controllers\Admin\CustomerController::class,'order'
        ])->name('order')->middleware('auth:web');                    
    // Chi tiết sản phẩm   
    Route::get('san-pham/{product_slug}.html', [
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
    Route::get('/delete-cart', [
        App\Http\Controllers\Admin\CartController::class,'destroy'
        ])->name('cart.delete');         
    Route::get('/gio-hang.html', [
        App\Http\Controllers\Admin\CartController::class,'index'
        ])->name('cart');

    // Checkout
    Route::get('/thanh-toan.html', [
        App\Http\Controllers\Admin\OrderController::class,'checkout'
        ])->name('checkout');
    Route::post('/thanh-toan.html', [
        App\Http\Controllers\Admin\OrderController::class,'checkout'
        ])->name('postcheckout');
    Route::get('/thong-tin-hoa-don.html', [
        App\Http\Controllers\Admin\OrderController::class,'success'
        ])->name('success');                
    // Route::get('/changepass', [
    //     App\Http\Controllers\HomeController::class,'changePass'
    //     ])->name('profile.pass');
    // Route::post('/updatepass', [
    //     App\Http\Controllers\HomeController::class,'updatePass'
    //     ]);
    
});