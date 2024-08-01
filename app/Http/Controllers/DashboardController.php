<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;
use App\Models\Cohorte;


class DashboardController extends Controller
{
    public function mostrarDashboard(){
        $estadoMatricula = 'Matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoInscipcion = 'Inscripción'; // Cambia esto por el estado específico que estás buscando
        $estadoPosMatricula = 'Pos-matriculado'; // Cambia esto por el estado específico que estás buscando
        $estadoPreMatricula = 'Pre-matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte1 = 'cohorte1'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte2 = 'cohorte2'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte3 = 'cohorte3'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte4 = 'cohorte4'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte5 = 'cohorte5'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte6 = 'cohorte6'; // Cambia esto por el estado específico que estás buscando
        $countMatricula = Participante::select('id')->where('estado_registro', $estadoMatricula )->count();
        $countInscripcion = Participante::select('id')->where('estado_registro', $estadoInscipcion)->count();
        $countPosMatricula = Participante::select('id')->where('estado_registro', $estadoPosMatricula)->count();
        $countPreMatricula = Participante::select('id')->where('estado_registro', $estadoPreMatricula)->count();
        $cantidadParticipantes = Participante::select('id')->count();

        $cohortes = Cohorte::all();
        // Inicializar un arreglo para los conteos
        $countCaucaCohorte = [];
        foreach ($cohortes as $cohorte) {
            $countCaucaCohorte[$cohorte->id] = Participante::select('id')->where('cohorte', $cohorte->nombre)->where('departamento_residencia', 'Cauca')->count();
        }
        // Contar participantes del departamento Cauca
        $countCauca = Participante::select('id')->where('departamento_residencia', 'Cauca')->count();
        $countCaucaPreMatriculados = Participante::select('id')->where('estado_registro', $estadoPreMatricula)->where('departamento_residencia', 'Cauca')->count();
        $countCaucaPosMatriculados = Participante::select('id')->where('estado_registro', $estadoPosMatricula)->where('departamento_residencia', 'Cauca')->count();
        $countCaucaMatriculados = Participante::select('id')->where('estado_registro', $estadoMatricula)->where('departamento_residencia', 'Cauca')->count();
        // $countCaucaCorte1 = Participante::select('id')->where('cohorte', $estadoCohorte1)->where('departamento_residencia', 'Cauca')->count();
        // $countCaucaCorte2 = Participante::select('id')->where('cohorte', $estadoCohorte2)->where('departamento_residencia', 'Cauca')->count();
        // $countCaucaCorte3 = Participante::select('id')->where('cohorte', $estadoCohorte3)->where('departamento_residencia', 'Cauca')->count();
        // $countCaucaCorte4 = Participante::select('id')->where('cohorte', $estadoCohorte4)->where('departamento_residencia', 'Cauca')->count();
        // $countCaucaCorte5 = Participante::select('id')->where('cohorte', $estadoCohorte5)->where('departamento_residencia', 'Cauca')->count();
        // $countCaucaCorte6 = Participante::select('id')->where('cohorte', $estadoCohorte6)->where('departamento_residencia', 'Cauca')->count();




        // Contar participantes del departamento Nariño
        foreach ($cohortes as $cohorte) {
            $countNariñoCohorte[$cohorte->id] = Participante::select('id')->where('cohorte', $cohorte->nombre)->where('departamento_residencia', 'Nariño')->count();
        }
        $countNariño = Participante::select('id')->where('departamento_residencia', 'Nariño')->count();
        $countNariñoPreMatriculados = Participante::select('id')->where('estado_registro', $estadoPreMatricula)->where('departamento_residencia', 'Nariño')->count();
        $countNariñoPosMatriculados = Participante::select('id')->where('estado_registro', $estadoPosMatricula)->where('departamento_residencia', 'Nariño')->count();
        $countNariñoMatriculados = Participante::select('id')->where('estado_registro', $estadoMatricula)->where('departamento_residencia', 'Nariño')->count();
        // $countNariñoCorte1 = Participante::select('id')->where('cohorte', $estadoCohorte1)->where('departamento_residencia', 'Nariño')->count();
        // $countNariñoCorte2 = Participante::select('id')->where('cohorte', $estadoCohorte2)->where('departamento_residencia', 'Nariño')->count();
        // $countNariñoCorte3 = Participante::select('id')->where('cohorte', $estadoCohorte3)->where('departamento_residencia', 'Nariño')->count();
        // $countNariñoCorte4 = Participante::select('id')->where('cohorte', $estadoCohorte4)->where('departamento_residencia', 'Nariño')->count();
        // $countNariñoCorte5 = Participante::select('id')->where('cohorte', $estadoCohorte5)->where('departamento_residencia', 'Nariño')->count();
        // $countNariñoCorte6 = Participante::select('id')->where('cohorte', $estadoCohorte6)->where('departamento_residencia', 'Nariño')->count();

        $labels = ['Etiqueta 1', 'Etiqueta 2', 'Etiqueta 3'];
        $data = [30, 50, 20];

        // dd($estadoMatricula);
        return view('dashboard', ['countMatricula' => $countMatricula, 'countInscripcion' => $countInscripcion, 'countPosMatricula' => $countPosMatricula, 'countPreMatricula' =>  $countPreMatricula,
        'labels' => $labels, 'data' => $data, 'cantidadParticipantes' => $cantidadParticipantes,
        'countCauca' => $countCauca,
        'countCaucaCohorte' => $countCaucaCohorte,
        'countNariñoCohorte' => $countNariñoCohorte,
        'cohortes' => $cohortes,

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
