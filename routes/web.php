<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

Route::post('/', function () { return view('login'); })->name('login2');
Route::get('/crud', [DashboardController::class, 'index'])->name('crud');

Route::get('/', [LoginController::class, 'mostrarFormularioLogin']);
Route::post('/login', [LoginController::class, 'iniciarSesion'])->middleware('guest')->name('login');

Route::get('/register', function () { return view('register'); })->name('register');
Route::put('/notas/{id}', [DashboardController::class, 'actualizarNota'])->name('notas.update');
