<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['admin'])->group(function () {
        Route::resource('karyawan', KaryawanController::class);
    });

    Route::get('/daftar-karyawan', function () {
        $karyawans = \App\Models\Karyawan::latest()->paginate(10);
        return view('karyawan.user-index', compact('karyawans'));
    })->name('karyawan.user');
});

require __DIR__.'/auth.php';