<?php

use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
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
    return view('principal');
})->name('inicio');

// LOGIN - LOGOUT
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


// REGISTRO
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// ALUMNOS
Route::get('estudiantes', [StudentsController::class, 'index'])->name('estudiantes');
// Route::get(/)
// Route::post('estudiantes', [StudentsController::class, 'store']);

// AGREGAR ALUMNO
Route::get('/add/student', [AddStudentController::class, 'index'])->name('alumno');
Route::POST('/add/student', [AddStudentController::class, 'store']);


// CURSOS
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');
Route::post('/cursos', [CursosController::class, 'store']);

// CODIGOS
Route::get('/codigos', [CodesController::class, 'index'])->name('codigos');
Route::post('/codigos', [CodesController::class, 'store']);


