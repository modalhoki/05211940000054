<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JemputinController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\tabelController;
use App\Http\Controllers\relationController;
use App\Http\Controllers\githubController;
use App\Http\Controllers\bajuController;
use App\Http\Controllers\easController;
use App\Http\Controllers\DwikiController;


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

/*
    Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('coba', function() {
    return "Halo";
});

// jemputin
Route::get('/', [JemputinController::class, 'halamanUtama'])->name('home');

Route::get('product', [JemputinController::class, 'halamanProduct'])->name('product');

Route::get('about-us', [JemputinController::class, 'halamanAboutUs'])->name('aboutUs');

Route::get('contact-us', [JemputinController::class, 'halamanContactUs'])->name('contactUs');

Route::get('order', [JemputinController::class, 'halamanOrder'])->name('order');

// crud
Route::get('pegawai', [pegawaiController::class, 'halamanUtama'])->name('crud');

Route::get('pegawai/tambah', [pegawaiController::class, 'halamanTambah']);

Route::post('pegawai/store', [pegawaiController::class, 'store']);

Route::get('pegawai/edit/{id}',[pegawaiController::class, 'edit']);

Route::post('pegawai/update',[pegawaiController::class, 'update']);

Route::get('pegawai/hapus/{id}',[pegawaiController::class, 'hapus']);

// tabel tugas
Route::get('tabel',[tabelController::class, 'home']);

Route::get('tabel/tambah',[tabelController:: class, 'tambah']);

Route::post('tabel/add',[tabelController:: class, 'add']);

Route::get('tabel/edit/{id}',[tabelController::class, 'edit']);

Route::post('tabel/edit/update',[tabelController:: class, 'update']);

Route::get('tabel/hapus/{id}',[tabelController::class, 'delete']);

Route::get('tabel/cari',[tabelController::class, 'cari']);

//relation
Route::get('relation',[relationController::class, 'home']);

Route::get('relation/full',[relationController::class, 'penuh']);

Route::get('relation/tambah',[relationController:: class, 'tambah']);

Route::post('relation/add',[relationController:: class, 'add']);

Route::get('relation/edit/{id}',[relationController::class, 'edit']);

Route::post('relation/edit/update',[relationController:: class, 'update']);

Route::get('relation/hapus/{id}',[relationController::class, 'delete']);

Route::get('relation/cari',[relationController::class, 'cari']);

Route::get('relation/pegawai', [relationController::class, 'pegawai']);

Route::get('relation/pegawai/tambah', [relationController::class, 'pegawaiTambah']);

Route::post('relation/pegawai/store', [relationController::class, 'addPegawai']);

Route::get('relation/pegawai/edit/{id}',[relationController::class, 'editPegawai']);

Route::post('relation/pegawai/edit/update',[relationController::class, 'updatePegawai']);

Route::get('relation/pegawai/hapus/{id}',[relationController::class, 'hapusPegawai']);

//tugasRead
Route::get('github',[githubController::class, 'home']);

Route::get('github/read/{id}',[githubController::class, 'read']);

Route::get('github/join',[githubController::class, 'penuh']);

Route::get('github/tambah',[githubController:: class, 'tambah']);

Route::post('github/add',[githubController:: class, 'add']);

Route::get('github/edit/{id}',[githubController::class, 'edit']);

Route::post('github/edit/update',[githubController:: class, 'update']);

Route::get('github/hapus/{id}',[githubController::class, 'delete']);

Route::get('github/cari',[githubController::class, 'cari']);

Route::get('github/pegawai', [githubController::class, 'pegawai']);

Route::get('github/pegawai/tambah', [githubController::class, 'pegawaiTambah']);

Route::post('github/pegawai/store', [githubController::class, 'addPegawai']);

Route::get('github/pegawai/edit/{id}',[githubController::class, 'editPegawai']);

Route::post('github/pegawai/edit/update',[githubController::class, 'updatePegawai']);

Route::get('github/pegawai/hapus/{id}',[githubController::class, 'hapusPegawai']);

//baju
Route::get('baju',[bajuController::class, 'home']);

Route::get('baju/tambah',[bajuController:: class, 'tambah']);

Route::post('baju/add',[bajuController:: class, 'add']);

Route::get('baju/edit/{kode}',[bajuController::class, 'edit']);

Route::post('baju/edit/update',[bajuController:: class, 'update']);

Route::get('baju/hapus/{kode}',[bajuController::class, 'delete']);

Route::get('baju/cari',[bajuController::class, 'cari']);

//EAS
Route::get('eas',[easController::class, 'home']);

Route::get('eas/tambah',[easController:: class, 'tambah']);

Route::post('eas/add',[easController:: class, 'add']);

Route::get('eas/hapus/{nrp}',[easController::class, 'delete']);

//dwiki
Route::get('dwiki',[DwikiController::class, 'home']);

Route::get('dwiki/tambah',[DwikiController:: class, 'tambah']);

Route::post('dwiki/add',[DwikiController:: class, 'add']);

Route::get('dwiki/edit/{id}',[DwikiController::class, 'edit']);

Route::post('dwiki/edit/update',[DwikiController:: class, 'update']);

Route::get('dwiki/hapus/{id}',[DwikiController::class, 'delete']);

Route::get('dwiki/cari',[DwikiController::class, 'cari']);