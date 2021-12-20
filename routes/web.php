<?php

use App\Http\Controllers\PendaftaranController;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('/daftar',[PendaftaranController::class, 'index'])->name('daftar'); //index laman pendaftaran
Route::post('/daftar/store',[PendaftaranController::class, 'store'])->name('daftar.simpan'); //simpan data pendaftaran
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.beranda');
});

Route::get('/kepengurusan',[App\Http\Controllers\KepengurusanController::class, 'index'])->name('kepengurusan');
Route::get('/tambah-kepengurusan',[App\Http\Controllers\KepengurusanController::class, 'create'])->name('tambah-kepengurusan');
Route::post('/simpan-kepengurusan',[App\Http\Controllers\KepengurusanController::class, 'store'])->name('simpan-kepengurusan');
