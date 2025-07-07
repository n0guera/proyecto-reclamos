<?php 
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\Auth\LogoutController;


Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('mi-cuenta');
    });

    Route::get('/reclamos/create', [ReclamoController::class, 'create'])->name('reclamos.create');

    Route::get('/mi-cuenta', function () {
        return view('mi-cuenta'); 
    })->name('mi-cuenta');
    
    Route::get('/sobre-nosotros', function () {
        return view('sobre-nosotros');  
    })->name('sobre-nosotros');
    
    Route::post('/logout', LogoutController::class)->name('logout');
});




?>