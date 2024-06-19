<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ParticipantesExport;
use App\Exports\CampistasExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Participante;


class ReportesController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('permission:reportes-listar|reportes-crear|reportes-editar|reportes-eliminar', ['only' => ['index', 'store']]);
        $this->middleware('permission:reportes-crear', ['only' => ['create', 'store']]);
        $this->middleware('permission:reportes-editar', ['only' => ['edit', 'update']]);
        $this->middleware('permission:reportes-eliminar', ['only' => ['destroy']]);
    }
    public function export()
    {
        return Excel::download(new ParticipantesExport, 'participantes.xlsx');
    }

    public function index(Request $request)
    {
        $request->flash();

        // $participantesQuery = Participante::select('id', 'tipo_documento', 'numero_documento', 'primer_nombre', 'primer_apellido', 'estado_registro', 'aprobacion_documento', 'carga_documento')->where('primer_nombre', '!=', Null);
        $participantesQuery = Participante::select('id', 'tipo_documento', 'departamento_residencia', 'numero_documento', 'primer_nombre', 'primer_apellido', 'cohorte', 'eje_final_formacion', 'nivel_formacion', 'modalidad_bootcamps', 'estado_registro', 'inicios_de_sesion','fecha_inicio_formacion', 'estado_de_formacion', 'plataforma_empleabilidad', 'hoja_de_vida_empleabilidad', 'proyecto_registrado', 'postulacion_registrada')
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

        if ($request->has('departamento_residencia')) {
            $filtro = $request->departamento_residencia;
            $participantesQuery->where('departamento_residencia', $filtro);

        }

        if ($request->has('eje_final_formacion')) {
            $filtro = $request->eje_final_formacion;
            $participantesQuery->where('eje_final_formacion', $filtro);

        }

        if ($request->has('modalidad_bootcamps')) {
            $filtro = $request->modalidad_bootcamps;
            $participantesQuery->where('modalidad_bootcamps', $filtro);

        }





        $participantes = $participantesQuery->paginate(7);


        return view('admin.reportes.index', compact('participantes'));
    }

    public function excelCampistaExport(Request $request)
    {
        $filters = $request->all();
        return Excel::download(new CampistasExport($filters), 'ReporteCampistas.xlsx');
    }


}
