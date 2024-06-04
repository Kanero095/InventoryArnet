<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\jenismodul;
use App\Http\Controllers\lokasipenyimpanan;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\namamodul;
use App\Http\Controllers\namaperangkat;
use App\Http\Controllers\pinjam;
use App\Http\Controllers\spare;
use App\Http\Controllers\type;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/', function () {
    return redirect('/home');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     })->name('home');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [spare::class,'index_home'],function(){
        return view('home');
    })->name('home');


    // spare
    Route::get('/input-spare',[spare::class,'create_spare']);
    Route::get('/read-spare',[spare::class,'index_spare']);
    Route::post('/input-spare',[spare::class,'input'])->name('inputspare');

    // index for input spare ~ selection form
    Route::get('/input-spare',[spare::class,'index_data']);

    // Modul Controller
    Route::get('/nama-perangkat',[ModulController::class,'create_nape']);
    Route::get('/nama-modul',[ModulController::class,'create_namo']);
    Route::get('/jenis-modul',[ModulController::class,'create_jemo']);
    Route::get('/type',[ModulController::class,'create_type']);
    Route::get('/lokasi-penyimpanan',[ModulController::class,'create_lope']);

    // nama perangkat
    Route::post('/nama-perangkat',[namaperangkat::class,'input'])->name('namaperangkat');

    // jenis modul
    Route::post('/jenis-modul',[jenismodul::class,'input'])->name('jenismodul');

    // nama modul
    Route::post('/nama-modul',[namamodul::class,'input'])->name('namamodul');

    // tipe
    Route::post('/type',[type::class,'input'])->name('type');

    // lokasi penyimpanan
    Route::post('/lokasi-penyimpanan',[lokasipenyimpanan::class,'input'])->name('lokasipenyimpanan');


    // -- Pinjam
    Route::get('/read-spare/pinjam',[pinjam::class,'index']);
    Route::get('/read-spare/pinjam/{id}',[pinjam::class,'read'])->name('pinjam.read');
    Route::get('/read-spare/pinjam/edit/{id}',[pinjam::class,'edit'])->name('pinjam.edit');
    Route::post('/read-spare/pinjam/edit/{id}',[pinjam::class,'save'])->name('pinjam.save');



    // EDIT DELETE spares\\
    Route::post('/read-spare/{id}',[spare::class,'destroy'])->name('spare.destroy');
});


