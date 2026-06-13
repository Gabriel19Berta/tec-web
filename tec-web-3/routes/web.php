<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\UserController;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/novo/', function(){
    return view('novo');
});

Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuarios/plano/{id}', [UserController::class, 'mostraPlano']);
Route::post('/usuarios/plano/{id}', [UserController::class, 'alteraPlanos'])->name('usuario.plano');

Route::resource('/user', App\Http\Controllers\UserController::class);