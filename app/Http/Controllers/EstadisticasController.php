<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

class EstadisticasController extends Controller
{
    public function mostrarDashboard(){

        $ia = 'Inteligencia artificial';
        $programacion = 'Programación';
        $analisisDatos = 'Análisis de Datos';
        $blockchain = 'BlockChain';
        $arqNube = 'Arquitectura en la nube';

        $estadoMatricula = 'Matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoInscipcion = 'Inscripción'; // Cambia esto por el estado específico que estás buscando
        $estadoPosMatricula = 'Pos-matriculado'; // Cambia esto por el estado específico que estás buscando
        $estadoPreMatricula = 'Pre-matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte1 = 'cohorte1'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte2 = 'cohorte2'; // Cambia esto por el estado específico que estás buscando
     

        $cohorte1IA = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->count();
        $cohorte1Programacion = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->count();
        $cohorte1analisisDatos = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->count();
        $cohorte1blockchain = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->count();
        $cohorte1arqNube = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->count();

        // Conteo para Cauca cohorte 1
        $cohorte1IA_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1Programacion_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1analisisDatos_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1blockchain_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1arqNube_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Cauca')->count();

        // Conteo para Nariño cohorte 1
        $cohorte1IA_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1Programacion_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1analisisDatos_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1blockchain_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1arqNube_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Nariño')->count();

         // Conteo para Cauca cohorte 2
         $cohorte2IA_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2Programacion_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2analisisDatos_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2blockchain_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2arqNube_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Cauca')->count();
 
         // Conteo para Nariño cohorte 2
         $cohorte2IA_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2Programacion_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2analisisDatos_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2blockchain_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2arqNube_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Nariño')->count();
       
        $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];
        $data = [$cohorte1IA,  $cohorte1Programacion, $cohorte1analisisDatos, $cohorte1blockchain, $cohorte1arqNube];

        $dataCaucaCohorte1 = [$cohorte1IA_Cauca, $cohorte1Programacion_Cauca, $cohorte1analisisDatos_Cauca, $cohorte1blockchain_Cauca, $cohorte1arqNube_Cauca];
        $dataNarinoCohorte1 = [$cohorte1IA_Narino, $cohorte1Programacion_Narino, $cohorte1analisisDatos_Narino, $cohorte1blockchain_Narino, $cohorte1arqNube_Narino];

        $dataCaucaCohorte2 = [$cohorte2IA_Cauca, $cohorte2Programacion_Cauca, $cohorte2analisisDatos_Cauca, $cohorte2blockchain_Cauca, $cohorte2arqNube_Cauca];
        $dataNarinoCohorte2 = [$cohorte2IA_Narino, $cohorte2Programacion_Narino, $cohorte2analisisDatos_Narino, $cohorte2blockchain_Narino, $cohorte2arqNube_Narino];

        
        // dd($estadoMatricula);
        return view('admin/dashboard/estadisticas', [
        'labels' => $labels, 'data' => $data, 
        'dataCaucaCohorte1' => $dataCaucaCohorte1, 
        'dataNarinoCohorte1' => $dataNarinoCohorte1, 
        'dataCaucaCohorte2' => $dataCaucaCohorte2, 
        'dataNarinoCohorte2' => $dataNarinoCohorte2, 
        ]);
    }
}
