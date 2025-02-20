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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/crud', function () {
    return view('crud');
});

use Illuminate\Support\Facades\register;
Route::get('/register', function () {
    return view('register');
})->name('register');


use Illuminate\Support\Facades\welcome;
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


use Illuminate\Support\Facades\crud;
Route::get('/crud', function () {
    return view('crud');
})->name('crud');


use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');