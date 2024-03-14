<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\TecnicaController;
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

Route::resource('/idiomas', IdiomaController::class);
route::resource('/tecnicas', TecnicaController::class);
route::resource('/estudiantes', EstudianteController::class);

