<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReclamoController;



Route::get('/', function () {
    return view('home');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/sobre-nosotros', 'sobre')->name('sobre');



Route::middleware('auth')->group(function () {
    Route::get('/reclamos/crear', [ReclamoController::class, 'create'])->name('reclamos.create');
    Route::post('/reclamos', [ReclamoController::class, 'store'])->name('reclamos.store');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('reclamos', [ReclamoController::class, 'adminIndex'])->name('reclamos.index');
    Route::get('reclamos/{reclamo}/edit', [ReclamoController::class, 'edit'])->name('reclamos.edit');
    Route::put('reclamos/{reclamo}', [ReclamoController::class, 'update'])->name('reclamos.update');
    Route::delete('reclamos/{reclamo}', [ReclamoController::class, 'destroy'])->name('reclamos.destroy');
});

Route::middleware(['auth'])->get('/mis-reclamos', [ReclamoController::class, 'misReclamos'])->name('reclamos.mios');