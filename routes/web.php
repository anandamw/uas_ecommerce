<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RekapitulasiController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/coba', function () {
        return view('admin.coba');
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/home', [AuthController::class, 'url']);
    Route::get('/checkout-detail', [CheckoutController::class, 'details']);
    Route::get('/final', [CheckoutController::class, 'final']);
    Route::middleware(['auth', 'userAkses:admin'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/export', [DashboardController::class, 'export']);
        Route::post('/checkout', [CheckoutController::class, 'checkout']);
        Route::get('/keranjang/{token}', [CartController::class, 'cart']);
        Route::post('/update/{token}/keranjang', [CartController::class, 'update']);
        Route::get('/keranjang/hapus/{token}', [CartController::class, 'delete']);

        Route::get('/kasir', [ProdukController::class, 'index']);
        Route::post('/kasir/{id}/update', [ProdukController::class, 'update']);
        Route::post('/kasir/store', [ProdukController::class, 'store']);
        Route::get('/kasir/{id}/delete', [ProdukController::class, 'delete']);

        Route::get('/pages', [HomeController::class, 'index']);





        Route::get('/rekapitulasi', [RekapitulasiController::class, 'index']);

        Route::get('/produk', [ProdukController::class, 'detail']);
        Route::get('/notifikasi', [ProdukController::class, 'notif']);
    });


    Route::middleware(['auth', 'userAkses:karyawan'])->group(function () {

        Route::get('/karyawan/kasir', [ProdukController::class, 'index']);
        Route::get('/karyawan/keranjang/{token}', [CartController::class, 'cart']);
        Route::post('/karyawan/update/{token}/keranjang', [CartController::class, 'update']);
        Route::get('/karyawan/keranjang/hapus/{token}', [CartController::class, 'delete']);
        Route::post('/karyawan/checkout', [CheckoutController::class, 'checkout']);




        Route::get('/karyawan/pages', [HomeController::class, 'index']);

        Route::post('/karyawan/checkout', [CheckoutController::class, 'checkout']);
        Route::get('/karyawan/checkout-detail', [CheckoutController::class, 'details']);

        Route::get('/karyawan/final', [CheckoutController::class, 'final']);
        Route::get('/karyawan/rekapitulasi', [RekapitulasiController::class, 'index']);

        Route::get('/karyawan/produk', [ProdukController::class, 'detail']);
        Route::get('/karyawan/notifikasi', [ProdukController::class, 'notif']);
    });
});
