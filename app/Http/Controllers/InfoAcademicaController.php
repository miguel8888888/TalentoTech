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
        $participantesQuery = Participante::select('id', 'tipo_documento', 'numero_documento', 'primer_nombre', 'primer_apellido', 'cohorte', 'estado_registro', 'aprobacion_documento', 'carga_documento')
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
}
