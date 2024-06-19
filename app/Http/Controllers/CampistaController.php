<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campista;
use App\Models\Participante;
use App\Models\Proyectos;
use App\Models\Empresa;
use App\Models\Ofertas;

class CampistaController extends Controller
{
    public function index()
    {
      //grafica 4
        $empresas = Empresa::all()->count();

        $empresasCauca = Empresa::where('departamento', 'Cauca')->count();
        $empresasNarino = Empresa::where('departamento', 'Nariño')->count();

        // Mostrar el resultado
        $data4 = [$empresasCauca, $empresasNarino];
        $labels = ['Empresas en Cauca', 'Empresas en Nariño'];

        //fin grafica 4

        //grafica 5

        // Obtener las empresas con el conteo de ofertas
        $empresas = Empresa::withCount('ofertas')->get(['id_user', 'nombre']);

        // Separar los resultados en arrays
        $nombres_empresas = $empresas->pluck('nombre')->toArray();
        $conteo_ofertas = $empresas->pluck('ofertas_count')->toArray();
        // dd($empresas,$nombres_empresas, $conteo_ofertas);

        function generarColorRGB() {
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b = rand(0, 255);
            return "rgb($r, $g, $b)";
        }

        // Generar el array de colores
        $colores = array_map(function() {
            return generarColorRGB();
        }, $nombres_empresas);


         //fin grafica 5

        return view('admin.empleabilidad.graficas', [
            'labels' => $labels,
            'data4' => $data4,
            'nombres_empresas' => $nombres_empresas,
            'conteo_ofertas' => $conteo_ofertas,
            'colores' => $colores,
        ]);


    }

    // public function obtenerDatosGrafica(Request $request)
    // {
    //     // Obtener los parámetros de los filtros
    //     $cohorte = $request->input('cohorte');
    //     $departamento = $request->input('departamento');
    //     $bootcamp = $request->input('bootcamp');

    //     if($cohorte == '' && $departamento == '' && $bootcamp == ''){
    //         $participantes = Participante::whereNotNull('cohorte')
    //         ->pluck('numero_documento')
    //         ->toArray();  // Convertir la colección a un array

    //     } else {
    //          // Obtener los documentos de los participantes
    //         $participantes = Participante::whereNotNull('cohorte')
    //         ->where('cohorte', $cohorte)
    //         ->where('departamento_residencia', $departamento)
    //         ->where('eje_final_formacion', $bootcamp)
    //         ->pluck('numero_documento')
    //         ->toArray();  // Convertir la colección a un array

    //     }

    //     $participantesNum = count($participantes);
    //     // Obtener las identificaciones de los campistas
    //     $campistas = Campista::select('identificacion')
    //     ->pluck('identificacion')
    //     ->toArray();  // Convertir la colección a un array

    //     // Encontrar coincidencias entre los dos arrays
    //     $coincidencias = array_intersect($participantes, $campistas);

    //     // Contar el número de coincidencias
    //     $num_coincidencias = count($coincidencias);

    //     // Mostrar el resultado
    //     $data = [$num_coincidencias, $participantesNum];

    //    $labels = ['Registrados en la plataforma de empleabilidad', 'No registrados en la plataforma de empleabilidad'];

    //     return response()->json([
    //         'labels' => $labels,
    //         'data' => $data,
    //     ]);
    // }



    public function obtenerDatosGrafica(Request $request)
    {
        // Obtener los parámetros de los filtros
        $cohorte = $request->input('cohorte');
        $departamento = $request->input('departamento');
        $bootcamp = $request->input('bootcamp');

        // Iniciar la consulta
        $query = Participante::whereNotNull('cohorte');

        // Agregar condiciones basadas en los filtros
        if (!empty($cohorte)) {
            $query->where('cohorte', $cohorte);
        }

        if (!empty($departamento)) {
            $query->where('departamento_residencia', $departamento);
        }

        if (!empty($bootcamp)) {
            $query->where('eje_final_formacion', $bootcamp);
        }

        // Obtener los documentos de los participantes
        $participantes = $query->pluck('numero_documento')->toArray();

        $participantesNum = count($participantes);

        // Obtener las identificaciones de los campistas
        $campistas = Campista::select('identificacion')
            ->pluck('identificacion')
            ->toArray();

        // Encontrar coincidencias entre los dos arrays
        $coincidencias = array_intersect($participantes, $campistas);

        // Contar el número de coincidencias
        $num_coincidencias = count($coincidencias);

        // Mostrar el resultado
        $data = [$num_coincidencias, $participantesNum - $num_coincidencias];
        $labels = ['Registrados en la plataforma de empleabilidad', 'No registrados en la plataforma de empleabilidad'];

        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }

    public function obtenerDatosGrafica2(Request $request)
    {
        // Obtener los parámetros de los filtros
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $bootcamp = $request->input('bootcamp');

        // Iniciar la consulta
        $query = Participante::whereNotNull('cohorte');

        // Agregar condiciones basadas en los filtros
        if (!empty($cohorte)) {
            $query->where('cohorte', $cohorte);
        }

        // if (!empty($departamento)) {
        //     $query->where('departamento_residencia', $departamento);
        // }

        if (!empty($bootcamp)) {
            $query->where('eje_final_formacion', $bootcamp);
        }

        // Obtener los documentos de los participantes
        // $participantesConProyecto = $query->where('proyecto_registrado', 'Si')->pluck('numero_documento')->count();

        //obtener los participantes con proyecto en nariño
        $participantesConProyectoNarino = (clone $query)->where('departamento_residencia', 'Nariño')->where('proyecto_registrado', 'Si')->pluck('numero_documento')->count();
        //obtener los participantes con proyecto en cauca
        $participantesConProyectoCauca = (clone $query)->where('departamento_residencia', 'Cauca')->where('proyecto_registrado', 'Si')->pluck('numero_documento')->count();


        // Mostrar el resultado
        $data2 = [$participantesConProyectoCauca, $participantesConProyectoNarino];
        $labels = ['Número de proyectos cargados cauca', 'Número de proyectos cargados nariño'];

        return response()->json([
            'labels' => $labels,
            'data2' => $data2,
        ]);
    }

    public function obtenerDatosGrafica3(Request $request)
    {
        // Obtener los parámetros de los filtros
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $bootcamp = $request->input('bootcamp');

        // Iniciar la consulta
        $query = Participante::whereNotNull('cohorte');

        // Agregar condiciones basadas en los filtros
        if (!empty($cohorte)) {
            $query->where('cohorte', $cohorte);
        }

        // if (!empty($departamento)) {
        //     $query->where('departamento_residencia', $departamento);
        // }

        if (!empty($bootcamp)) {
            $query->where('eje_final_formacion', $bootcamp);
        }

        // Obtener los documentos de los participantes
        // $participantesConCV = $query->where('hoja_de_vida_empleabilidad', 'Si')->pluck('numero_documento')->count();

        // obtener los participantes con cv en nariño
        $participantesConCVNarino = (clone $query)->where('departamento_residencia', 'Nariño')->where('hoja_de_vida_empleabilidad', 'Si')->pluck('numero_documento')->count();

        // obtener los participantes con cv en cauca
        $participantesConCVCauca = (clone $query)->where('departamento_residencia', 'Cauca')->where('hoja_de_vida_empleabilidad', 'Si')->pluck('numero_documento')->count();



        // Mostrar el resultado
        $data3 = [$participantesConCVCauca, $participantesConCVNarino];
        $labels = ['Número de hojas de vida cargadas cauca', 'Número de hojas de vida cargadas nariño'];

        return response()->json([
            'labels' => $labels,
            'data3' => $data3,
        ]);
    }

    public function obtenerDatosGrafica4()
    {



        // return response()->json([
        //     'labels' => $labels,
        //     'data3' => $data3,
        // ]);
    }

}
