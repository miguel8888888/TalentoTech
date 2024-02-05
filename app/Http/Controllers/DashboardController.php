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
        $cantidadParticipantes = Participante::count();

        // Contar participantes del departamento Cauca
        $countCauca = Participante::where('departamento_residencia', 'Cauca')->count();
        $countCaucaPreMatriculados = Participante::where('estado_registro', $estadoPreMatricula)->where('departamento_residencia', 'Cauca')->count();
        $countCaucaPosMatriculados = Participante::where('estado_registro', $estadoPosMatricula)->where('departamento_residencia', 'Cauca')->count();
        $countCaucaMatriculados = Participante::where('estado_registro', $estadoMatricula)->where('departamento_residencia', 'Cauca')->count();


        // Contar participantes del departamento Nariño
        $countNariño = Participante::where('departamento_residencia', 'Nariño')->count();
        $countNariñoPreMatriculados = Participante::where('estado_registro', $estadoPreMatricula)->where('departamento_residencia', 'Nariño')->count();
        $countNariñoPosMatriculados = Participante::where('estado_registro', $estadoPosMatricula)->where('departamento_residencia', 'Nariño')->count();
        $countNariñoMatriculados = Participante::where('estado_registro', $estadoMatricula)->where('departamento_residencia', 'Nariño')->count();

        $labels = ['Etiqueta 1', 'Etiqueta 2', 'Etiqueta 3'];
        $data = [30, 50, 20];
        
        // dd($estadoMatricula);
        return view('dashboard', ['countMatricula' => $countMatricula, 'countInscripcion' => $countInscripcion, 'countPosMatricula' => $countPosMatricula, 'countPreMatricula' =>  $countPreMatricula,
        'labels' => $labels, 'data' => $data, 'cantidadParticipantes' => $cantidadParticipantes,
        'countCauca' => $countCauca,
        'countCaucaPreMatriculados' => $countCaucaPreMatriculados,
        'countCaucaPosMatriculados' => $countCaucaPosMatriculados,
        'countCaucaMatriculados' => $countCaucaMatriculados,
        'countNariño' => $countNariño,
        'countNariñoPreMatriculados' => $countNariñoPreMatriculados,
        'countNariñoPosMatriculados' => $countNariñoPosMatriculados,
        'countNariñoMatriculados' => $countNariñoMatriculados,
        ]);
    }
}
