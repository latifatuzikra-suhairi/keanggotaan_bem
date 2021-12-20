<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\HomeController;
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
Auth::routes(['register'=> false, 'reset'=>false]);
Route::get('/register', function () {
    abort(404);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.beranda');
});

Route::get('/pendaftar', [AutentikasiController::class, 'pendaftarindex'])->name('pendaftar');
Route::get('/pendaftar/detail/{id_pendaftaran}', [AutentikasiController::class, 'detailpendaftaran'])->name('pendaftar.detail');
Route::post('/pendaftar/detail/{id_pendaftaran}/assign', [AutentikasiController::class, 'assignakun'])->name('pendaftar.assign');

// Harusnya tambahin id
Route::get('/profil', [AutentikasiController::class, 'profilindex'])->name('profil');
// Ganti password pake id
Route::get('/gantipassword/', [AutentikasiController::class, 'gantipassword'])->name('ganti-password');
Route::post('/gantipassword/store', [AutentikasiController::class, 'savegantipassword'])->name('save-ganti-password');

Route::get('/kepengurusan',[KepengurusanController::class, 'index'])->name('kepengurusan');
Route::get('/tambah-kepengurusan',[KepengurusanController::class, 'create'])->name('tambah-kepengurusan');
Route::post('/simpan-kepengurusan',[KepengurusanController::class, 'store'])->name('simpan-kepengurusan');
