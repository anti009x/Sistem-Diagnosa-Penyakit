<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DiagnosaController;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\GejalaController;
use App\Http\Controllers\API\PenyakitController;
use App\Http\Controllers\API\RiwayatController;
// Diagnosa routes
Route::get('/diagnosa', [DiagnosaController::class, 'index']);
Route::post('diagnosa', [DiagnosaController::class, 'diagnosa']);



// Gejala routes
Route::get('gejala', [GejalaController::class, 'index']);
Route::post('gejala', [GejalaController::class, 'store']);
Route::get('gejala/{gejala}', [GejalaController::class, 'show']);
Route::put('gejala/{gejala}', [GejalaController::class, 'update']);
Route::delete('gejala/{gejala}', [GejalaController::class, 'destroy']);


// Penyakit routes
    Route::get('penyakit', [PenyakitController::class, 'index']);
    Route::post('penyakit', [PenyakitController::class, 'store']);
    Route::get('penyakit/{penyakit}', [PenyakitController::class, 'show']);
    Route::put('penyakit/{penyakit}', [PenyakitController::class, 'update']);
    Route::delete('penyakit/{penyakit}', [PenyakitController::class, 'destroy']);

// Riwayat routes
    Route::get('riwayat', [RiwayatController::class, 'index']);
    Route::get('riwayat/{riwayat}', [RiwayatController::class, 'show']);



    // // Member routes
    // Route::get('member', [UserController::class, 'index'])->name('admin.member.index');
    // Route::post('member', [UserController::class, 'store'])->name('admin.member.store');
    // Route::get('member/{id}', [UserController::class, 'show'])->name('admin.member.show');
    // Route::put('member/{id}', [UserController::class, 'update'])->name('admin.member.update');
    // Route::delete('member/{id}', [UserController::class, 'destroy'])->name('admin.member.destroy');




    // // Rule routes
    // Route::get('rules/{id}', [RuleController::class, 'index'])->name('admin.rules.index');
    // Route::put('rules/{id}', [RuleController::class, 'update'])->name('admin.rules.update');


// Authentication routes (e.g., login, register, etc.)
require __DIR__.'/auth.php';
