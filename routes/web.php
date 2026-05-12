<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LoginController;

Route::get('/', [HalamanController::class, 'index'])->name('home');

Route::get('/formulir', [HalamanController::class, 'form'])->name('formulir');
Route::post('/formulir/tambah', [HalamanController::class, 'formulir_tambah'])->name('formulir_tambah');
Route::get('/formulir/sukses', [HalamanController::class, 'formulir_sukses'])->name('formulir_sukses');

Route::get('/tentang', [HalamanController::class, 'about'])->name('tentang');


//rute login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/submit', [LoginController::class, 'submitLogin'])->name('login.submit');


//rute register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/submit', [LoginController::class, 'submitRegister'])->name('register.submit');


//rute dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');



// route crud

Route::post('admin/buku-tamu/tambah', [AdminController::class, 'buku_tamu_tambah']);
Route::get('admin/buku-tamu/edit/{id}', [AdminController::class, 'buku_tamu_edit']);
Route::post('admin/buku-tamu/update/{id}', [AdminController::class, 'buku_tamu_update']);
Route::post('admin/buku-tamu/delete/{id}', [AdminController::class, 'buku_tamu_delete']);

