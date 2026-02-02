<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HalamanController::class, 'index']); //memanggil Controller lewat Routes
Route::get('/dashboard' ,function(){
    return view('dashboard');
})->name('dashboard');