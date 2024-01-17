<?php

use App\Http\Controllers\RegistrarController;
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
    return view('Formularios/validar');
});

// Route::resource('/pazysalvo', PazYSalvoController::class)->middleware('auth');
Route::post('/matricula/{number}', [RegistrarController::class, 'guardarDatos']);
Route::get('/registroexitoso', [RegistrarController::class, 'cargarVistaExito'])->name('registroexitoso');
Route::post('/validarregistro', [RegistrarController::class, 'consultarUsuario']);
