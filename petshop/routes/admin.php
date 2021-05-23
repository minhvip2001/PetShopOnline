<?php

use App\Http\Controllers\Admin\Auth\LoginController;

use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function (){
  // Dashboard
  Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');
  // Category
  Route::group(['prefix'=>'/categories'],function(){
    Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.list');
    Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.store');
    Route::get('/{category_slug}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/{category_slug}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.update');
  // Route::post('/{category_slug}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('category.delete'); 
  });
  // Brand
  Route::group(['prefix'=>'/brands'],function(){
    Route::get('/', [App\Http\Controllers\Admin\BrandController::class, 'index'])->name('brand.list');
    Route::get('/create', [App\Http\Controllers\Admin\BrandController::class, 'create'])->name('brand.create');
    Route::post('/create', [App\Http\Controllers\Admin\BrandController::class, 'create'])->name('brand.store');
    Route::get('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('brand.update');
  });
  // Product
  Route::group(['prefix'=>'/products'],function(){
    Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.list');
    Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('product.create');
    Route::post('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('product.store');
    Route::get('/{product_slug}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/{product_slug}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.update');
  });
  // Customer
    Route::group(['prefix'=>'/customers'],function(){
    Route::get('/', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customer.list');
    Route::get('/create', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('customer.create');
    Route::post('/create', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('customer.store');
    Route::get('/id={customer_id}&active=true', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('customer.update');
  });
   // Khách hàng
   Route::group(['prefix'=>'/users'],function(){
    Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.list');
    // Route::get('/create', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('customer.create');
    // Route::post('/create', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('customer.store');
    // Route::get('/id={customer_id}&active=true', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('customer.edit');
    // Route::post('/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('customer.update');
  });

});
