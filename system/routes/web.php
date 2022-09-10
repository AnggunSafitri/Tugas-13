<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontviewController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientAdminController;
use App\Http\Controllers\PenjualAdminController;

use App\Http\Controllers\PenjualController;
use App\Http\Controllers\KategoriPenjualController;
use App\Http\Controllers\ProdukPenjualController;


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


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/', AdminController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::resource('client', ClientAdminController::class);
    Route::put('konfir-client/{client}', [ClientAdminController::class, 'confirClient']);
    Route::resource('penjual', PenjualAdminController::class);
    Route::put('konfir-penjual/{penjual}', [PenjualAdminController::class, 'confirPenjual']);
});


Route::group( [ 'middleware' => 'auth:penjual' ], function(){
    Route::get('/penjual', [PenjualController::class, 'index'] );
    Route::resource('penjual/kategori', KategoriPenjualController::class);
    Route::resource('penjual/produk', ProdukPenjualController::class);
});


Route::get('/', [AuthController::class, 'login']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);

Route::group( [ 'middleware' => 'auth:client' ], function(){
    Route::get('/web', [FrontviewController::class, 'index']);
    Route::get('/account', [FrontviewController::class, 'account']);
    Route::get('/produk', [FrontviewController::class, 'produk']);
    Route::get('/produkdetail', [FrontviewController::class, 'produkdetail']);

});
Route::get('register-client', [RegisterController::class, 'registerClient']);
Route::post('register-client/store', [RegisterController::class, 'storeClient']);

Route::get('register-penjual', [RegisterController::class, 'registerPenjual']);
Route::post('register-penjual/store', [RegisterController::class, 'storePenjual']);


