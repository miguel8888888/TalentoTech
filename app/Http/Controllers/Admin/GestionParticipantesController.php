<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

use App\Exports\ParticipantesExport;
use Maatwebsite\Excel\Facades\Excel;

class GestionParticipantesController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {
        $request->flash();
        $participantes = Participante::where([
            ['primer_nombre', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->buscar)) {
                    $query->orWhere('primer_nombre', 'LIKE', '%' . $s . '%')
                        ->orWhere('numero_documento', 'LIKE', '%' . $s . '%')
                        ->orWhere('estado_registro', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(50);
        return view('admin.participantes.index', [
            'participantes' => $participantes,
        ]);
    }

    public function export()
    {
        return Excel::download(new ParticipantesExport, 'participantes.xlsx');
    }

    public function edit(Request $request, $number)
    {
        $participantes = Participante::find($number);
        // dd($participantes);
       

        return view('admin.participantes.edit', [
            'participantes' => $participantes,
        ]);
    }

    public function update(Request $request, $number)
    {
        $request->validate([
            // Define las reglas de validación según tus necesidades
        ]);
        
        $participantes = Participante::find($number);
       


        //  $informacion_usuario->fecha_diligenciamiento = date('Y-m-d');
        // dd($participantes->primer_nombre);
        $participantes->primer_nombre = $request->input('primer_nombre');
        $participantes->segundo_nombre = $request->input('segundo_nombre');
        $participantes->primer_apellido = $request->input('primer_apellido');
        $participantes->segundo_apellido = $request->input('segundo_apellido');
        $participantes->tipo_documento = $request->input('tipo_documento');
        $participantes->numero_documento = $request->input('numero_documento');
        $participantes->nacionalidad = $request->input('nacionalidad');
        $participantes->ciudad_nacimiento = $request->input('ciudad_nacimiento');
        $participantes->fecha_nacimiento = $request->input('fecha_nacimiento');
        $participantes->edad = $request->input('edad');
        $participantes->sexo = $request->input('sexo');
        $participantes->identidad_genero_preg = $request->input('identidad_genero_preg');
        $participantes->identidad_genero = $request->input('identidad_genero');
        $participantes->orientacion_sexual = $request->input('orientacion_sexual');
        $participantes->correo_electronico = $request->input('correo_electronico');
        $participantes->celular_llamadas = $request->input('celular_llamadas');
        $participantes->whatsapp = $request->input('whatsapp');
        $participantes->familiar_primer_nombre = $request->input('familiar_primer_nombre');
        $participantes->familiar_segundo_nombre = $request->input('familiar_segundo_nombre');
        $participantes->familiar_primer_apellido = $request->input('familiar_primer_apellido');
        $participantes->familiar_segundo_apellido = $request->input('familiar_segundo_apellido');
        $participantes->familiar_tipo_documento = $request->input('familiar_tipo_documento');
        $participantes->familiar_numero_documento = $request->input('familiar_numero_documento');
        $participantes->familiar_correo_electronico = $request->input('familiar_correo_electronico');
        $participantes->familiar_celular_llamadas = $request->input('familiar_celular_llamadas');
        $participantes->familiar_whatsapp = $request->input('familiar_whatsapp');
        $participantes->grupo_etnico = $request->input('grupo_etnico');
        $participantes->discapacidad = $request->input('discapacidad');
        $participantes->discapacidad_certificada = $request->input('discapacidad_certificada');
        $participantes->tipo_discapacidad = implode(" | ", (array) $request->input('tipo_discapacidad'));
        $participantes->segun_discapacidad = implode(" | ", (array) $request->input('segun_discapacidad'));
        $participantes->grupo_atencion_diferencial = implode(" | ", (array) $request->input('grupo_atencion_diferencial'));
        $participantes->grado_escolaridad = $request->input('grado_escolaridad');
        $participantes->ocupacion = $request->input('ocupacion');
        $participantes->profesion = $request->input('profesion');
        $participantes->pais_residencia = $request->input('pais_residencia');
        $participantes->departamento_residencia = $request->input('departamento_residencia');
        $participantes->municipio_residencia = $request->input('municipio_residencia');
        $participantes->zona_ubicacion = $request->input('zona_ubicacion');
        $participantes->zona_resto = $request->input('zona_resto');
        $participantes->corregimiento_nombre = $request->input('corregimiento_nombre');
        $participantes->barrio_nombre = $request->input('barrio_nombre');
        $participantes->vereda_nombre = $request->input('vereda_nombre');
        $participantes->direccion = $request->input('direccion');
        $participantes->estrato_socioeconomico = $request->input('estrato_socioeconomico');
        $participantes->tipo_vivienda = $request->input('tipo_vivienda');
        $participantes->tenencia_vivienda = $request->input('tenencia_vivienda');
        $participantes->servicios_basicos = implode(" | ", (array) $request->input('servicios_basicos'));
        $participantes->equipos_tecnologicos = implode(" | ", (array) $request->input('equipos_tecnologicos'));
        $participantes->otros_equipos = $request->input('otros_equipos');
        $participantes->disponibilidad_formacion = $request->input('disponibilidad_formacion');
        $participantes->horario_formacion = $request->input('horario_formacion');
        $participantes->eje_final_formacion = $request->input('eje_final_formacion');
        $participantes->nivel_formacion = $request->input('nivel_formacion');
        $participantes->modalidad_bootcamps = $request->input('modalidad_bootcamps');
        // $informacion_usuario->requisitos_aceptados = $request->input('requisitos_aceptados');
        // $informacion_usuario->estado_registro = "Matriculado";
        $participantes->save();
        
       
        // return view('admin.participantes.index', [
        //     'participantes' => $participantes,
        // ]);
        return redirect()->route('registroexitoso');
        // return redirect()->route('ruta.de.regreso')->with('success', 'Participante actualizado exitosamente');
    }
}
