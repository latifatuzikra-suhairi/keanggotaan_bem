<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\PengurusController;
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

//tampil kepengurusan
Route::get('/kepengurusan',[KepengurusanController::class, 'index'])->name('kepengurusan');
//tampil tambah-kepengurusan
Route::get('/tambah-kepengurusan',[KepengurusanController::class, 'create'])->name('tambah-kepengurusan');
//simpan tambah-kepengurusan
Route::post('/simpan-kepengurusan',[KepengurusanController::class, 'store'])->name('simpan-kepengurusan');
//update-kepengurusan
Route::get('/update-kepengurusan/{id_kepengurusan}',[KepengurusanController::class, 'getupdate'])->name('updateKepengurusan');
//simpan update-kepengurusan
Route::post('/update-kepengurusan/{id_kepengurusan}',[KepengurusanController::class, 'setUpdate'])->name('simpan-update-kepengurusan');
//tampil pengurus
Route::get('/pengurus/{id_kepengurusan}',[PengurusController::class, 'index'])->name('pengurus');
//tampil detail pengurus
Route::get('/pengurus/detail/{id_pengurus}',[PengurusController::class, 'getdetail'])->name('detailPengurus');
//tampil update detail pengurus
Route::get('/pengurus/detail/updatepengurus/{id_pengurus}',[PengurusController::class, 'getdata'])->name('tampil_updatedetailPengurus');
//update detail pengurus
Route::post('/pengurus/detail/updatepengurus/{id_pengurus}',[PengurusController::class, 'setData'])->name('updatedetailPengurus');
