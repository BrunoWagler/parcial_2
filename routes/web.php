<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuralController;

Route::get('/', function () {
    return view('dashboardsmural.index');
});

Route::get('/create', function () {
    return view('dashboardsmural.registermural');
})->name('dashboardsmural.registermural');
// Exibe a view de login
Route::get('/loginmural', function () {
    return view('dashboardsmural.loginmural');
})->name('dashboardsmural.loginmural');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/senha', function () {
    return view('dashboardsmural.esqueci-asenha');
})->name('dashboardsmural.esqueci-asenha');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
