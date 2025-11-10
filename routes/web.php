<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');


Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');

Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');

//edit existing doctor
Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');

Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');

Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy'); 
// Add other routes as needed
// Note: Ensure that the DoctorController and Doctors model are correctly set up.
// Also, make sure to run migrations to create the doctors table in your database.

