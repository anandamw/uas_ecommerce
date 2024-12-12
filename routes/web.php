<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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

Route::middleware(['auth', 'userAkses:admin'])->group(function () {
    Route::get('/home', function () {
        return redirect('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/keranjang/{token}', [CartController::class, 'cart']);
    Route::post('/update/{token}/keranjang', [CartController::class, 'update']);
    Route::get('/keranjang/hapus/{token}', [CartController::class, 'delete']);

    Route::get('/produk', [ProdukController::class, 'index']);
    Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/{id}/delete', [ProdukController::class, 'delete']);

    Route::get('/pages', [HomeController::class, 'index']);

    Route::post('/checkout', [CheckoutController::class, 'checkout']);
    Route::get('/checkout-detail', [CheckoutController::class, 'details']);

    Route::get('/final', [CheckoutController::class, 'final']);
});
