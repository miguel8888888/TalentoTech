<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\Admin\GestionParticipantesController;

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

Route::get('/', function () {
    return view('Formularios/validar');
});

Route::resource('participantes', GestionParticipantesController::class)->middleware('auth');

Route::get('buscarparticipante', [GestionParticipantesController::class, 'index'])->name('participantes.search')->middleware('auth');

Route::get('export/', [GestionParticipantesController::class, 'export'])->name('participantes.export')->middleware('auth');

// Route::resource('/pazysalvo', PazYSalvoController::class)->middleware('auth');
Route::post('/matricula/{number}', [RegistrarController::class, 'guardarDatos']);
Route::post('/participantes/edit/{number}', [GestionParticipantesController::class, 'edit']);
Route::get('/registroexitoso', [RegistrarController::class, 'cargarVistaExito'])->name('registroexitoso');
Route::post('/validarregistro', [RegistrarController::class, 'consultarUsuario']);


Route::get('/cargardocumentos/{CC}', [RegistrarController::class, 'cargardocumentos'])->name('cargardocumentos');
Route::post('/guardardoc/{CC}', [RegistrarController::class, 'guardarCedula']);
Route::get('/correodocumento', [RegistrarController::class, 'enviarCorreos'])->name('correodocumento');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
