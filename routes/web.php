<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemPakarController;

Route::get('/', [SistemPakarController::class, 'index'])->name('index');
Route::get('/start', [SistemPakarController::class, 'formGejala'])->name('formGejala');
Route::post('/result', [SistemPakarController::class, 'hitungBayes'])->name('hitungBayes');
