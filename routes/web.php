<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('dashboard');
});*/

//sample routes
//Route::get('/', [HomeController::class, 'index'])->name('index');

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/tentang-kami', 'tentang_kami')->name('tentang_kami');
    Route::get('/visi-misi', 'visi_misi')->name('visi_misi');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/dashboard', 'dashboard');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// authentication reference
https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/
