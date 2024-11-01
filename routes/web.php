<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

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

// Ruta de Quienes Somos (accesible a todos)
Route::get('/quienes', function () {
    return view('quienes'); // Nueva ruta para Quienes Somos
});

// Rutas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home'); // Solo accesible por usuarios autenticados
    Route::get('/faq', function () {
        return view('faq'); // Nueva ruta para Preguntas Frecuentes
    });
    Route::get('/contact', function () {
        return view('contact'); // Nueva ruta para Contactanos
    });
    Route::get('/ubicacion', function () {
        return view('ubicacion'); // Nueva ruta de ubicación
    });
    Route::get('/product', function () {
        return view('product'); // Ruta de productos
    });

    Route::resource('projects', ProjectController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('users', UserController::class);
});

// Rutas de autenticación
Auth::routes();
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
