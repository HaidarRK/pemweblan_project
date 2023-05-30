<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/kereta', [KeretaController::class, 'index'])->name('kereta');
Route::get('/kereta/detail/{no_ka}', [KeretaController::class, 'detail']);
Route::get('/kereta/add', [KeretaController::class, 'add']);
Route::post('/kereta/insert', [KeretaController::class, 'insert']);
Route::get('/kereta/edit/{no_ka}', [KeretaController::class, 'edit']);
Route::post('/kereta/update/{no_ka}', [KeretaController::class, 'update']);
Route::get('/kereta/delete/{no_ka}', [KeretaController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::group(['middleware' => 'admin'], function() {
    Route::get('/akun', [AkunController::class, 'index'])->name('akun');
    Route::get('/akun/detail/{id_pengguna}', [AkunController::class, 'detail']);
    Route::get('/akun/add', [AkunController::class, 'add']);
    Route::post('/akun/insert', [AkunController::class, 'insert']);
    Route::get('/akun/edit/{id_pengguna}', [AkunController::class, 'edit']);
    Route::post('/akun/update/{id_pengguna}', [AkunController::class, 'update']);
    Route::get('/akun/delete/{id_pengguna}', [AkunController::class, 'delete']);

    Route::get('/penumpang', [PenumpangController::class, 'index'])->name('penumpang');
    Route::get('/penumpang/detail/{no_ktp}', [PenumpangController::class, 'detail']);
    Route::get('/penumpang/add', [PenumpangController::class, 'add']);
    Route::post('/penumpang/insert', [PenumpangController::class, 'insert']);
    Route::get('/penumpang/edit/{no_ktp}', [PenumpangController::class, 'edit']);
    Route::post('/penumpang/update/{no_ktp}', [PenumpangController::class, 'update']);
    Route::get('/penumpang/delete/{no_ktp}', [PenumpangController::class, 'delete']);

    Route::get('/tiket', [TiketController::class, 'index']);
    Route::get('/tiket/print', [TiketController::class, 'print']);
    Route::get('/tiket/printpdf', [TiketController::class, 'printpdf']);
});

route::group(['middleware' => 'user'], function() {
    Route::get('/user', [UserController::class, 'index'])->name('user');
});
