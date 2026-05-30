<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\KaryawanController;

Route::resource('karyawan', KaryawanController::class);