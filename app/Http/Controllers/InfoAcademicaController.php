<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

class InfoAcademicaController extends Controller
{
    public function index(Request $request)
    {
        $request->flash();

        // $participantesQuery = Participante::select('id', 'tipo_documento', 'numero_documento', 'primer_nombre', 'primer_apellido', 'estado_registro', 'aprobacion_documento', 'carga_documento')->where('primer_nombre', '!=', Null);
        $participantesQuery = Participante::select('id', 'tipo_documento', 'numero_documento', 'primer_nombre', 'primer_apellido', 'cohorte', 'curso', 'progreso', 'inicios_de_sesion','estado_registro', 'aprobacion_documento', 'carga_documento')
        ->where('primer_nombre', '!=', null)
        ->whereNotNull('cohorte');
        if ($request->has('buscar')) {
            $buscar = $request->buscar;
            $participantesQuery->where(function ($query) use ($buscar) {
                $query->where('primer_nombre', 'LIKE', '%' . $buscar . '%')
                    ->orWhere('numero_documento', 'LIKE', '%' . $buscar . '%')
                    ->orWhere('estado_registro', 'LIKE', '%' . $buscar . '%');
            });
        }

        if ($request->has('cohorte')) {
            $filtro = $request->cohorte;
            $participantesQuery->where('cohorte', $filtro);
            // Reemplaza 'columna_a_filtrar' con el nombre real de la columna en tu tabla Participante
        }
     
        $participantes = $participantesQuery->paginate(50);

       
        return view('admin.infoacademica.index', compact('participantes'));
    }

    public function edit(Request $request, $number)
    {
        $participantes = Participante::find($number);
        // $horario = Horarios::all();
        // dd($participantes);
        // URL del archivo JSON
        $url = 'https://imaster.academy/report/didactic_report/Reportes.json';

        // Obtener el contenido del JSON
        $json = file_get_contents($url);

        // Decodificar el JSON y convertirlo en un array asociativo
        $data = json_decode($json, true);

        // Ahora puedes manipular los datos como desees
        // Por ejemplo, imprimir los datos obtenidos
        $datos = $data[0]['data'];
        $valor_buscar = $participantes->numero_documento;
        // var_dump($valor_buscar);
        $busqueda = $this->buscaTech($valor_buscar, $datos);
        $info_academica_participante = array();

        if (!empty($busqueda)) {
            foreach ($busqueda as $key) {
                // Almacena los datos relevantes de los estudiantes encontrados en un nuevo array
                $info_academica_participante = $datos[$key];
                // var_dump($info_academica_participante);
            }
        }
     
        

        return view('admin.infoacademica.edit', [
            'participantes' => $participantes,
            'info_academica_participante' => $info_academica_participante,
            
        ]);
    }

    public function buscaTech($clave, $datos) {
        $claves_encontradas = array();
    
        // Recorrer cada estudiante en la lista
        foreach ($datos as $indice => $estudiante) {
            // Buscar el valor en el array asociativo del estudiante actual
            if (in_array($clave, $estudiante)) {
                // Si se encuentra, agregar el índice del estudiante a las claves encontradas
                $claves_encontradas[] = $indice;
            }
        }
        return $claves_encontradas;
    }

    public function graficas(){
        
        $participantes=Participante::select('id');
      
        return view('admin.infoacademica.graficas', compact('participantes'));
        // return redirect()->route('infoacademica.graficas');
    }

    
    public function obtenerDatosGrafica(Request $request)
    {
        // Obtener los parámetros de los filtros
        $cohorte = $request->input('cohorte');
        $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');
        $bootcamp = $request->input('bootcamp');
        // Realizar la consulta a la base de datos para obtener los cursos disponibles según los filtros
        $cursos = Participante::select('curso')
            ->where('cohorte', $cohorte)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->where('eje_final_formacion', $bootcamp)
            ->whereNotNull('curso')
            ->groupBy('curso')
            ->pluck('curso');
    
        // Inicializar arreglos para almacenar los promedios
        $promedioProgresos = [];
        $promedioIniciosSesion = [];
        $promedioNotas = [];

        foreach ($cursos as $curso) {
            // Obtener la suma total del progreso para el curso actual
            $sumaProgreso = Participante::where('cohorte', $cohorte)
                ->where('curso', $curso)
                ->where('departamento_residencia', $departamento)
                ->where('modalidad_bootcamps', $modalidad)
                ->where('eje_final_formacion', $bootcamp)
                ->sum('progreso');

            // Obtener la suma total de inicios de sesión para el curso actual
            $sumaIniciosSesion = Participante::where('cohorte', $cohorte)
            ->where('curso', $curso)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->where('eje_final_formacion', $bootcamp)
            ->sum('inicios_de_sesion');

            // Obtener la suma total de notas para el curso actual
            $sumaNotas = Participante::where('cohorte', $cohorte)
            ->where('curso', $curso)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->where('eje_final_formacion', $bootcamp)
            ->sum('nota_final');
        
            // Contar el número de participantes para el curso actual
            $cantidadParticipantes = Participante::where('cohorte', $cohorte)
                ->where('curso', $curso)
                ->where('departamento_residencia', $departamento)
                ->where('modalidad_bootcamps', $modalidad)
                ->where('eje_final_formacion', $bootcamp)
                ->count();
        
             // Calcular el promedio de progreso para el curso actual
            $promedioProgreso = $cantidadParticipantes > 0 ? $sumaProgreso / $cantidadParticipantes : 0;
            // Calcular el promedio de inicios de sesión para el curso actual
            $promedioIniciosSesionCurso = $cantidadParticipantes > 0 ? $sumaIniciosSesion / $cantidadParticipantes : 0;
            // Calcular el promedio de nota para el curso actual
            $promedioNotaCurso = $cantidadParticipantes > 0 ? $sumaNotas / $cantidadParticipantes : 0;

            // Almacenar los promedios en los arreglos correspondientes
            $promedioProgresos[$curso] = $promedioProgreso;
            $promedioIniciosSesion[$curso] = $promedioIniciosSesionCurso;
            $promedioNotas[$curso] = $promedioNotaCurso;
        }

        // Obtener la cantidad de participantes por curso
        $participantesPorCurso = array();
        foreach ($cursos as $curso) {
            $cantidadParticipantes = Participante::where('cohorte', $cohorte)
                ->where('curso', $curso)
                ->where('departamento_residencia', $departamento)
                ->where('eje_final_formacion', $bootcamp)
                ->count();
            $participantesPorCurso[$curso] = $cantidadParticipantes;
        }
        

        return response()->json([
            'labels' => $cursos,
            'promedioProgresos' => $promedioProgresos,
            'promedioIniciosSesion' => $promedioIniciosSesion ,
            'promedioNotas' => $promedioNotas ,
         
            'participantesPorCurso' => $participantesPorCurso
        ]);
    }

    public function sincronizarDatos(){
               // Cargar los datos externos una vez
               $url = 'https://imaster.academy/report/didactic_report/Reportes.json';
               $json = file_get_contents($url);
               $datos = json_decode($json, true)[0]['data'];
           
               // Iterar sobre los participantes obtenidos de la base de datos
               // Buscar la entrada correspondiente en $datos basándose en el número de documento
               foreach ($datos as $item) {
                    $participante = Participante::where('numero_documento', $item['cedula'])->first();
                    if ($participante) {
                        $participante->curso = $item['curso'];
                        $participante->progreso = $item['progreso'];
                        $participante->inicios_de_sesion = $item['inicios_de_sesión'];
                        $participante->nota_final = $item['nota_final'];
                        $participante->save();
                    }
                    $participante = null;
                
               }
    }
}
