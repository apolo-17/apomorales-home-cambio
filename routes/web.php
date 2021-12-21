<?php

use App\Http\Controllers\InicioController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class, 'welcome'])->name('welcome');
Route::get('/login', [InicioController::class, 'login'])->name('login');
Route::get('/registro', [InicioController::class, 'registro'])->name('registro');
Route::get('/help', [InicioController::class, 'help'])->name('help');
Route::get('/reclamo', [InicioController::class, 'reclamo'])->name('reclamo');
Route::get('/prueba', function () {
    return Inertia::render('Dashboard/DashboardPage');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return Inertia::render('Dashboard');})->name('dashboard');
    Route::get('/movimientos', [InicioController::class, 'movements'])->name('movements');
    Route::get('/cuentas', [InicioController::class, 'bill'])->name('cuentas');
    Route::get('/perfil', [InicioController::class, 'profile'])->name('perfil');
});

require __DIR__.'/auth.php';
