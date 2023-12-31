<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class,'index']); //untuk landing page

Route::get('/register', [SessionController::class, 'register'])->middleware('guest'); //untuk register
Route::post('/postregister', [SessionController::class, 'postregister']);

Route::get('/login', [SessionController::class, 'login'])->name('login')->middleware('guest'); //untuk login
Route::post('/postlogin', [SessionController::class, 'postlogin']);

Route::post('/logout', [SessionController::class, 'logout']); //untuk logout

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth'); //untuk dashboard

Route::get('order/{id}', [OrderController::class, 'order'])->middleware('auth'); //untuk temporary_order
Route::post('order/{id}', [OrderController::class, 'orderpost'])->middleware('auth'); 

Route::get('checkout', [OrderController::class, 'checkout'])->middleware('auth'); //untuk ke halaman checkout
Route::post('checkout/{id}', [OrderController::class, 'checkoutpost'])->middleware('auth');  
Route::delete('checkout/{id}', [OrderController::class, 'checkoutdelete'])->middleware('auth'); //untuk hapus checkout
Route::get('editorder/{id}', [OrderController::class, 'edit'])->middleware('auth'); //untuk edit checkout
Route::put('update/{id}', [OrderController::class, 'updatepost'])->middleware('auth'); //untuk update checkout
