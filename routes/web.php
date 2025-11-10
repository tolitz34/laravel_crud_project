<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');


Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
