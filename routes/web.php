<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\Admin\GestionParticipantesController;
use App\Http\Controllers\Admin\GestionMatriculadosController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\ReportesController;

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
Route::resource('usuarios', UsuariosController::class)->middleware('auth');

Route::get('buscarparticipante', [GestionParticipantesController::class, 'index'])->name('participantes.search')->middleware('auth');

Route::get('buscarusuario', [UsuariosController::class, 'buscar'])->name('usuarios.search')->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'mostrarDashboard'])->name('dashboard')->middleware('auth');
Route::get('/estadisticas', [EstadisticasController::class, 'mostrarDashboard'])->name('estadisticas')->middleware('auth');;
Route::get('/obtener-datos-grafica', [EstadisticasController::class, 'obtenerDatosGrafica'])->name('obtener-datos-grafica')->middleware('auth');
Route::get('/obtener-datos-grafica7', [EstadisticasController::class, 'obtenerDatosGrafica7'])->name('obtener-datos-grafica7')->middleware('auth');
Route::get('/obtener-datos-grafica8', [EstadisticasController::class, 'obtenerDatosGrafica8'])->name('obtener-datos-grafica8')->middleware('auth');
Route::get('/obtener-datos-grafica9', [EstadisticasController::class, 'obtenerDatosGrafica9'])->name('obtener-datos-grafica9')->middleware('auth');
Route::get('/obtener-datos-grafica10', [EstadisticasController::class, 'obtenerDatosGrafica10'])->name('obtener-datos-grafica10')->middleware('auth');
Route::get('/obtener-datos-grafica11', [EstadisticasController::class, 'obtenerDatosGrafica11'])->name('obtener-datos-grafica11')->middleware('auth');

Route::get('export/', [ReportesController::class, 'export'])->name('participantes.export')->middleware('auth');

Route::get('exceldowload', function () {
    return view('exceldowload');
})->middleware(['auth', 'verified'])->name('exceldowload');

Route::post('/participantes/edit/{number}', [GestionParticipantesController::class, 'edit']);

// Route::get('registrar/usuario', [UsuariosController::class, 'create'])->name('usuarios.create');

// Route::post('registrousuarios', [UsuariosController::class, 'store']);

Route::post('/matricula/{number}', [RegistrarController::class, 'guardarDatos']);
Route::post('/update/participante/{number}', [GestionParticipantesController::class, 'update']);
Route::get('/registroexitoso', [RegistrarController::class, 'cargarVistaExito'])->name('registroexitoso');
Route::match(['get', 'post'],'/validarregistro', [RegistrarController::class, 'consultarUsuario']);


Route::get('/cargardocumentos/{CC}', [RegistrarController::class, 'cargardocumentos'])->name('cargardocumentos');
Route::post('/guardardoc/{CC}', [RegistrarController::class, 'guardarCedula']);
Route::get('/correodocumento', [RegistrarController::class, 'enviarCorreos'])->name('correodocumento');

Route::get('/recuperardocs', [RegistrarController::class, 'obtenerDocumentosCargados'])->name('recuperardocs');

Route::post('/aprobardocumento', [RegistrarController::class, 'aprobardocumento']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/symlink', function () {
//     Artisan::call('storage:link');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('user')->group(function () {
    Route::get('/profileUser/{user}', [ProfileUserController::class, 'edit'])->name('profileuser.edit');
    Route::patch('/profileUser/{user}', [ProfileUserController::class, 'update'])->name('profileuser.update');
    Route::delete('/profileUser/{user}', [ProfileUserController::class, 'destroy'])->name('profileuser.destroy');
});

Route::put('passwordUpdate/{user}', [ProfileUserController::class, 'passUpdate'])->name('contrasena.update');

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
