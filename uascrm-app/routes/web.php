<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;


// route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// route landing
Route::get('/',[LandingController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin');
//route booking
Route::get('/landingpage/booking/{id}', [BookingController::class, 'booking'])->name('booking');
Route::post('/landingpage/booking/{id}', [BookingController::class, 'pesan'])->name('pesan');
Route::group(['middleware' => ['auth']], function() {
    // route user
    Route::get('/admin/user/index', [UserController::class, 'index']);
    Route::get('/admin/user/create',[UserController::class, 'create']);
    Route::post('/admin/user/store', [UserController::class, 'store']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'destroy']);
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/admin/user/update/{id}', [UserController::class, 'update']);
 
    // pelanggan route
    Route::get('/admin/pelanggan/index', [PelangganController::class, 'index']);
    Route::get('/admin/pelanggan/create',[PelangganController::class, 'create']);
    Route::post('/admin/pelanggan/store',[PelangganController::class, 'store']);
    Route::get('/admin/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
    Route::post('/admin/pelanggan/update/{id}', [PelangganController::class, 'update']);
    

    // route penyedia
    Route::get('/admin/penyedia/index', [PenyediaController::class, 'index']);
    Route::get('/admin/penyedia/create', [PenyediaController::class, 'create']);
    Route::post('/admin/penyedia/store', [PenyediaController::class, 'store']);
    Route::get('/admin/penyedia/delete/{id}', [PenyediaController::class, 'destroy']);
    Route::get('/admin/penyedia/edit/{id}', [PenyediaController::class, 'edit']);
    Route::post('/admin/penyedia/update/{id}', [PenyediaController::class, 'update']);

    // route layanan
    Route::get('/admin/layanan/index', [LayananController::class, 'index']);
    Route::get('/admin/layanan/create', [LayananController::class, 'create']);
    Route::post('/admin/layanan/store', [LayananController::class, 'store']);
    Route::get('/admin/layanan/delete/{id}', [LayananController::class, 'destroy']);
    Route::get('/admin/layanan/edit/{id}', [LayananController::class, 'edit']);
    Route::post('/admin/layanan/update/{id}', [LayananController::class, 'update']);

    // route pemesanan
    Route::get('/admin/pemesanan/index', [PemesananController::class, 'index']);
    Route::get('/admin/pemesanan/create', [PemesananController::class, 'create']);
    Route::post('/admin/pemesanan/store', [PemesananController::class, 'store']);
    Route::get('/admin/pemesanan/delete/{id}', [PemesananController::class, 'destroy']);
    Route::get('/admin/pemesanan/edit/{id}', [PemesananController::class, 'edit']);
    Route::post('/admin/pemesanan/update/{id}', [PemesananController::class, 'update']);

    // route diskon
    Route::get('/admin/diskon/index', [DiskonController::class, 'index']);

    Route::post('/booking', [BookingController::class, 'pesan'])->name('booking');
   
});