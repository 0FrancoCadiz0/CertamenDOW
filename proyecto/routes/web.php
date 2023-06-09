<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class,'login'])->name('home.index');

Route::get('/Alumno',[AlumnoController::class,'homeAlum'])->name('alumnos.alumnos');

Route::get('/Profe',[ProfesorController::class,'homeProfe'])->name('profesor.profe');

Route::get('/Admin',[AdminController::class,'homeAdmin'])->name('administrador.admin');

Route::post('/Alumno',[AlumnoController::class,'store'])->name('alumnos.store');
Route::post('/Profe',[ProfesorController::class,'store'])->name('profesor.store');
