<?php

use App\Http\Controllers\Admin\Auth\LoginController;

use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function (){
  // Dashboard
  Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');
  // Category
  Route::group(['prefix'=>'/categories'],function(){
    Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.list')->middleware('can:category-list');
    Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create')->middleware('can:category-add');
    Route::post('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.store');
    Route::get('/{category_slug}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit')->middleware('can:category-edit');
    Route::post('/{category_slug}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.update');
  // Route::post('/{category_slug}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('category.delete'); 
  });
  // Brand
  Route::group(['prefix'=>'/brands'],function(){
    Route::get('/', [App\Http\Controllers\Admin\BrandController::class, 'index'])->name('brand.list')->middleware('can:brand-list');
    Route::get('/create', [App\Http\Controllers\Admin\BrandController::class, 'create'])->name('brand.create')->middleware('can:brand-add');
    Route::post('/create', [App\Http\Controllers\Admin\BrandController::class, 'create'])->name('brand.store');
    Route::get('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('brand.edit')->middleware('can:brand-edit');
    Route::post('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('brand.update');
  });
  // Product
  Route::group(['prefix'=>'/products'],function(){
    Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.list')->middleware('can:product-list');
    Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('product.create')->middleware('can:product-add');
    Route::post('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('product.store');
    Route::get('/{product_slug}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.edit')->middleware('can:product-edit');
    Route::post('/{product_slug}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product.update');
  });
  // Customer
    Route::group(['prefix'=>'/customers'],function(){
    Route::get('/', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customer.list');
    Route::get('/create', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('customer.create');
    Route::post('/create', [App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('customer.store');
    Route::get('/id={customer_id}', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/{customer_id}', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('customer.update');
  });
  // Staff
  Route::group(['prefix'=>'/users'],function(){
    Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.list')->middleware('can:user-list');
    Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create')->middleware('can:user-add');
    Route::post('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.store');
    Route::get('/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit')->middleware('can:user-edit');
    Route::post('/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.update');
  });
  // Role
  Route::group(['prefix'=>'/roles'],function(){
    Route::get('/', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('role.list')->middleware('can:role-list');
    Route::get('/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('role.create')->middleware('can:role-add');
    Route::post('/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('role.store');
    Route::get('/{id}', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('role.edit')->middleware('can:role-edit');
    Route::post('/{id}', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('role.update');
  });
  // Permission
  Route::group(['prefix'=>'/permissions'],function(){
    // Route::get('/', [App\Http\Controllers\Admin\PermissionController::class, 'index'])->name('role.list');
    Route::get('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('permission.create');
    Route::post('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('permission.store');
    Route::get('/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'edit'])->name('permission.update');
  });
  // Order
  Route::group(['prefix'=>'/orders'],function(){
    Route::get('/', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order.list');
    // Route::get('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('permission.create');
    // Route::post('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('permission.store');
    Route::get('/{id}', [App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('order.edit');
    // Route::post('/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'edit'])->name('permission.update');
  });

});
 