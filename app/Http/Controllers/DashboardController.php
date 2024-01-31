<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

class DashboardController extends Controller
{
    public function mostrarDashboard(){
        $estadoMatricula = 'Matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoInscipcion = 'Inscripción'; // Cambia esto por el estado específico que estás buscando
        $estadoPosMatricula = 'Pos-matriculado'; // Cambia esto por el estado específico que estás buscando
        $estadoPreMatricula = 'Pre-matricula'; // Cambia esto por el estado específico que estás buscando
        $countMatricula = Participante::where('estado_registro', $estadoMatricula )->count();
        $countInscripcion = Participante::where('estado_registro', $estadoInscipcion)->count();
        $countPosMatricula = Participante::where('estado_registro', $estadoPosMatricula)->count();
        $countPreMatricula = Participante::where('estado_registro', $estadoPreMatricula)->count();

        $labels = ['Etiqueta 1', 'Etiqueta 2', 'Etiqueta 3'];
        $data = [30, 50, 20];
        
        // dd($estadoMatricula);
        return view('dashboard', ['countMatricula' => $countMatricula, 'countInscripcion' => $countInscripcion, 'countPosMatricula' => $countPosMatricula, 'countPreMatricula' =>  $countPreMatricula,
    'labels' => $labels, 'data' => $data,]);
    }
}
