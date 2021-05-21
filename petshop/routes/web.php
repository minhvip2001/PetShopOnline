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
    Route::get('/danh-cho-cho', [
        App\Http\Controllers\Admin\CategoryController::class,'show'
        ])->name('category');;
    // Route::get('/changepass', [
    //     App\Http\Controllers\HomeController::class,'changePass'
    //     ])->name('profile.pass');
    // Route::post('/updatepass', [
    //     App\Http\Controllers\HomeController::class,'updatePass'
    //     ]);
});