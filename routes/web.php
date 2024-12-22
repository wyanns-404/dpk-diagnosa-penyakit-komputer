<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemPakarController;

Route::get('/', [SistemPakarController::class, 'index'])->name('index');
Route::get('/gejala', [SistemPakarController::class, 'formGejala'])->name('formGejala');
Route::post('/hitung-bayes', [SistemPakarController::class, 'hitungBayes'])->name('hitungBayes');
