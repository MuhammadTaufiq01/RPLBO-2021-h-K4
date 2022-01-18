<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginControlller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/admin', function () {
  return view('execute.admin');
}); //[AdminController::class, 'index'])->name('admin');


Route::middleware(['auth:pengguna',])->group(function () {
  //admin siswa
  Route::get('/list-siswa', [PenggunaController::class, 'index']);
  Route::get('siswa/{id}/edit', [PenggunaController::class, 'edit']);
  Route::post('/siswa/{id}/update', [PenggunaController::class, 'update']);
  Route::get('/siswa/{id}/delete', [PenggunaController::class, 'destroy']);
  //admin berita
  Route::get('/list-berita', [BeritaController::class, 'index']);
  Route::post('/tambah-berita', [BeritaController::class, 'create']);
  Route::post('/tambah-berita/proses', [BeritaController::class, 'store']);
  Route::get('/berita/{id}/detail', [BeritaController::class, 'edit']);
  Route::post('/berita/{id}/ubah', [BeritaController::class, 'update']);
  Route::get('/berita/{id}/hapus', [BeritaController::class, 'destroy']);
  Route::get('/tambah', [BeritaController::class, 'tambah']);
});

//daftar
Route::post('/proses-pendaftaran', [PenggunaController::class, 'create'])->middleware('guest:pengguna');
//login
Route::get('/login', [LoginControlller::class, 'index']);
Route::post('/login', [LoginControlller::class, 'authenticate']);
Route::post('/logout', [LoginControlller::class, 'logout']);

// siswa
Route::get('/dashboard', [BeritaController::class, 'index']);


Route::get('', [BeritaController::class, 'show']);
Route::get('/', [BeritaController::class, 'show']);
Route::get('/home', [BeritaController::class, 'show']);


Route::get('/daftar', function () {
  return view('auth.daftar', [
    'title' => 'Daftar',
  ]);
});

Route::get('/informasi-pendaftaran', function () {
  return view('main.informasi-pendaftaran', [
    'title' => 'Informasi Pendaftaran',

  ]);
});

Route::get('/ppdb', function () {
  return view('main.ppdb', [
    'title' => 'PPDB',

  ]);
});

Route::get('/profil', function () {
  return view('main.profil', [
    'title' => 'Profil',

  ]);
});
