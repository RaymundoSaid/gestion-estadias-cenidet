<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatoEstudianteController;
use App\Http\Controllers\DatoProfesorController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/estudiante/datos', [DatoEstudianteController::class, 'store'])->middleware('auth');
Route::get('/estudiante/formulario', [DatoEstudianteController::class, 'formulario'])->middleware(['auth'])->name('form.estudiante');
Route::get('/profesor/formulario', [DatoProfesorController::class, 'formulario'])->middleware(['auth'])->name('form.profesor');
Route::post('/profesor/datos', [DatoProfesorController::class, 'store'])->middleware(['auth']);