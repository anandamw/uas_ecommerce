<?php

use App\Http\Controllers\AlamatController;
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

Route::get('/', function () {
    return view('admin.dashboard');
});



Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::post('/kategori/{id}/update', [KategoriController::class, 'update']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/{id}/delete', [ProdukController::class, 'delete']);
