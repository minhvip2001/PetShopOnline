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
// // Route::get('/', [
// //     App\Http\Controllers\UserController::class,'index'
// //     ])->name('manage.login');
// Route::match(['get', 'post'], '/', [LoginController::class, 'login'])->name('login');
// Route::middleware('auth:admin')->group(function (){
//     Route::get('/a', [HomeController::class, 'index'])->name('dashboard');
// });
// Route::match(['get', 'post'], '/', [LoginController::class, 'login'])->name('login');

