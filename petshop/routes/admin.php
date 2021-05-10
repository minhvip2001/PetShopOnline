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
    Route::post('/create', [App\Http\Controllers\Admin\BrandController::class, 'store'])->name('brand.store');
    Route::get('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('brand.edit');
    Route::get('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'store'])->name('brand.update');
    Route::post('/{brand_slug}', [App\Http\Controllers\Admin\BrandController::class, 'destroy'])->name('brand.update'); 
    });
});
