<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/daftar',[PendaftaranController::class, 'requestHalamanPendaftaran'])->name('daftar'); //index laman pendaftaran
Route::post('/daftar/store',[PendaftaranController::class, 'setDataPendaftaran'])->name('daftar.simpan'); //simpan data pendaftaran

Auth::routes(['register'=> false, 'reset'=>false]);


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
//Data Pendaftar dan Assign Akun
Route::get('/pendaftar', [AutentikasiController::class, 'getPendaftaran'])->name('pendaftar');
Route::get('/pendaftar/detail/{id_pendaftaran}', [AutentikasiController::class, 'getDetailPendaftaran'])->name('pendaftar.detail');
Route::post('/pendaftar/detail/{id_pendaftaran}/assign', [AutentikasiController::class, 'setAssignAkun'])->name('pendaftar.assign');

// Harusnya tambahin id
Route::get('/profil', [AutentikasiController::class, 'requestHalamanProfil'])->name('profil');
// Ganti password pake id
Route::get('/gantipassword/', [AutentikasiController::class, 'requestHalamanGantiPassword'])->name('ganti-password');
Route::post('/gantipassword/store', [AutentikasiController::class, 'setPassword'])->name('set-password');

Route::get('/kepengurusan',[KepengurusanController::class, 'index'])->name('kepengurusan');
Route::get('/tambah-kepengurusan',[KepengurusanController::class, 'create'])->name('tambah-kepengurusan');
