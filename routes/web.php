<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/gejala', [App\Http\Controllers\GejalaController::class]);

    ## Route Datatable
    Route::get('/laporan/data',[\App\Http\Controllers\Backend\DataController::class,'laporan'])->name('laporan.data');
    Route::get('/gejala/data',[\App\Http\Controllers\Backend\DataController::class,'gejala'])->name('gejala.data');
    Route::get('/kerusakan/data',[\App\Http\Controllers\Backend\DataController::class,'kerusakan'])->name('kerusakan.data');
    Route::get('/pengetahuan/data',[\App\Http\Controllers\Backend\DataController::class,'pengetahuan'])->name('pengetahuan.data');

    Route::resource('gejala',(\App\Http\Controllers\Backend\GejalaController::class));
    Route::resource('kerusakan',(\App\Http\Controllers\Backend\KerusakanController::class));
    Route::resource('pengetahuan',(\App\Http\Controllers\Backend\PengetahuanController::class));

});