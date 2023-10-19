<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;

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
    return view('index');
});

Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'clogin'])->name('clogin');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class, 'save'])->name('save');
Route::get('/login_admin', [authController::class, 'login2'])->name('login2');
Route::post('/login_admin', [authController::class, 'clogin2'])->name('clogin2');
Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::prefix('masyarakat')->group(function(){
        Route::get('/', [MasyarakatController::class, 'index'])->name('masyarakat');
        Route::get('tulis_pengaduan', [MasyarakatController::class, 'tulis_pengaduan'])->name('tulis_pengaduan');
        Route::post('tulis_pengaduan', [MasyarakatController::class, 'simpan_pengaduan'])->name('simpan_pengaduan');
        Route::get('lihat_pengaduan', [MasyarakatController::class, 'lihat_pengaduan'])->name('lihat_pengaduan');
    });
});

// Untuk Admin
Route::middleware(['auth:admin', 'admin'])->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'vadmin'])->name('admin');
    Route::get('tanggapi_pengaduan', [AdminController::class, 'tanggapi_pengaduan'])->name('tanggapi_pengaduan');
    Route::get('tanggapi_pengaduan/{id_pengaduan}', [AdminController::class, 'detail_tanggapan'])->name('detail_tanggapan');
    Route::post('simpan_tanggapan', [AdminController::class, 'simpan_tanggapan'])->name('simpan_tanggapan');

    Route::get('data_masyarakat', [DataController::class, 'data_masyarakat'])->name('data_masyarakat');
    Route::post('data_masyarakat/{nik}', [DataController::class, 'hapus_masyarakat'])->name('hapus_masyarakat');

    Route::get('data_admin', [DataController::class, 'data_admin'])->name('data_admin');
    Route::get('tambah_data_admin', [DataController::class, 'tambah_data_admin'])->name('tambah_data_admin');
    Route::post('tambah_data_admin', [DataController::class, 'simpan_data_admin'])->name('simpan_data_admin');
    Route::get('edit_data_admin/{id_admin}', [DataController::class, 'edit_data_admin'])->name('edit_data_admin');
    Route::post('edit_data_admin/{id_admin}', [DataController::class, 'update_data_admin'])->name('update_data_admin');
    Route::post('hapus_data_admin/{id_admin}', [DataController::class, 'hapus_data_admin'])->name('hapus_data_admin');

    Route::get('data_pengaduan', [DataController::class, 'data_pengaduan'])->name('data_pengaduan');
    Route::get('detail_pengaduan/{id_pengaduan}', [DataController::class, 'detail_pengaduan'])->name('detail_pengaduan');

    Route::get('data_tanggapan', [DataController::class, 'data_tanggapan'])->name('data_tanggapan');
    Route::get('detail_tanggapan/{id_tanggapan}', [DataController::class, 'detail_tanggapan'])->name('detail_tanggapan');



    Route::get('laporan_masyarakat', [LaporanController::class, 'laporan_masyarakat'])->name('laporan_masyarakat');
    Route::get('laporan_admin', [LaporanController::class, 'laporan_admin'])->name('laporan_admin');
    Route::get('laporan_pengaduan', [LaporanController::class, 'laporan_pengaduan'])->name('laporan_pengaduan');
    Route::get('laporan_tanggapan', [LaporanController::class, 'laporan_tanggapan'])->name('laporan_tanggapan');
});

// Untuk Petugas
Route::middleware(['auth:admin', 'petugas'])->prefix('petugas')->group(function(){
    Route::get('/', [PetugasController::class, 'vpetugas'])->name('petugas');
    Route::get('verifikasi_pengaduan', [PetugasController::class, 'verifikasi_pengaduan'])->name('verifikasi_pengaduan');
    Route::get('detail_verifikasi/{id_pengaduan}', [PetugasController::class, 'detail_verifikasi'])->name('detail_verifikasi');
    Route::post('simpan_verifikasi', [PetugasController::class, 'simpan_verifikasi'])->name('simpan_verifikasi');
});