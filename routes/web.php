<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/register', [SessionController::class, 'register']); //untuk register
Route::post('/postregister', [SessionController::class, 'postregister']);

Route::get('/login', [SessionController::class, 'login']); //untuk login
Route::post('/postlogin', [SessionController::class, 'postlogin']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']); //untuk dashboard