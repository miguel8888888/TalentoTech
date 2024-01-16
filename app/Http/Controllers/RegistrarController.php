<?php

namespace App\Http\Controllers;

use App\Mail\MatriculaExito;
use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RegistrarController extends Controller
{
    public function guardarDatos(Request $request)
    {
        $validated = $request->validate([
            'numero_documento' => ' required',
            'primer_nombre' => ' required',
            'primer_apellido' => 'required',
            'url_archivo' => 'required|file|mimes:pdf|max:2048',

        ]);
        // 'fecha_diligenciamiento' => 'nullable|date',

        $informacion_usuario = new Participante();
        $informacion_usuario->fecha_diligenciamiento = date('Y-m-d');
        $informacion_usuario->primer_nombre = $request->input('primer_nombre');
        $informacion_usuario->segundo_nombre = $request->input('segundo_nombre');
        $informacion_usuario->primer_apellido = $request->input('primer_apellido');
        $informacion_usuario->segundo_apellido = $request->input('segundo_apellido');
        $informacion_usuario->tipo_documento = $request->input('tipo_documento');
        $informacion_usuario->numero_documento = $request->input('numero_documento');
        $informacion_usuario->nacionalidad = $request->input('nacionalidad');
        $informacion_usuario->ciudad_nacimiento = $request->input('ciudad_nacimiento');
        $informacion_usuario->fecha_nacimiento = $request->input('fecha_nacimiento');
        $informacion_usuario->edad = $request->input('edad');
        $informacion_usuario->sexo = $request->input('sexo');
        $informacion_usuario->identidad_genero_preg = $request->input('identidad_genero_preg');
        $informacion_usuario->identidad_genero = $request->input('identidad_genero');
        $informacion_usuario->orientacion_sexual = $request->input('orientacion_sexual');
        $informacion_usuario->correo_electronico = $request->input('correo_electronico');
        $informacion_usuario->celular_llamadas = $request->input('celular_llamadas');
        $informacion_usuario->whatsapp = $request->input('whatsapp');
        $informacion_usuario->familiar_primer_nombre = $request->input('familiar_primer_nombre');
        $informacion_usuario->familiar_segundo_nombre = $request->input('familiar_segundo_nombre');
        $informacion_usuario->familiar_primer_apellido = $request->input('familiar_primer_apellido');
        $informacion_usuario->familiar_segundo_apellido = $request->input('familiar_segundo_apellido');
        $informacion_usuario->familiar_tipo_documento = $request->input('familiar_tipo_documento');
        $informacion_usuario->familiar_numero_documento = $request->input('familiar_numero_documento');
        $informacion_usuario->familiar_correo_electronico = $request->input('familiar_correo_electronico');
        $informacion_usuario->familiar_celular_llamadas = $request->input('familiar_celular_llamadas');
        $informacion_usuario->familiar_whatsapp = $request->input('familiar_whatsapp');
        $informacion_usuario->grupo_etnico = $request->input('grupo_etnico');
        $informacion_usuario->discapacidad = $request->input('discapacidad');
        $informacion_usuario->discapacidad_certificada = $request->input('discapacidad_certificada');
        $informacion_usuario->tipo_discapacidad = implode(" | ", (array) $request->input('tipo_discapacidad'));
        $informacion_usuario->segun_discapacidad = implode(" | ", (array) $request->input('segun_discapacidad'));
        $informacion_usuario->grupo_atencion_diferencial = implode(" | ", (array) $request->input('grupo_atencion_diferencial'));
        $informacion_usuario->grado_escolaridad = $request->input('grado_escolaridad');
        $informacion_usuario->ocupacion = $request->input('ocupacion');
        $informacion_usuario->profesion = $request->input('profesion');
        $informacion_usuario->pais_residencia = $request->input('pais_residencia');
        $informacion_usuario->departamento_residencia = $request->input('departamento_residencia');
        $informacion_usuario->municipio_residencia = $request->input('municipio_residencia');
        $informacion_usuario->zona_ubicacion = $request->input('zona_ubicacion');
        $informacion_usuario->zona_resto = $request->input('zona_resto');
        $informacion_usuario->corregimiento_nombre = $request->input('corregimiento_nombre');
        $informacion_usuario->barrio_nombre = $request->input('barrio_nombre');
        $informacion_usuario->vereda_nombre = $request->input('vereda_nombre');
        $informacion_usuario->direccion = $request->input('direccion');
        $informacion_usuario->estrato_socioeconomico = $request->input('estrato_socioeconomico');
        $informacion_usuario->tipo_vivienda = $request->input('tipo_vivienda');
        $informacion_usuario->tenencia_vivienda = $request->input('tenencia_vivienda');
        $informacion_usuario->servicios_basicos = implode(" | ", (array) $request->input('servicios_basicos'));
        $informacion_usuario->equipos_tecnologicos = implode(" | ", (array) $request->input('equipos_tecnologicos'));
        $informacion_usuario->otros_equipos = $request->input('otros_equipos');
        $informacion_usuario->disponibilidad_formacion = $request->input('disponibilidad_formacion');
        $informacion_usuario->horario_formacion = $request->input('horario_formacion');
        $informacion_usuario->eje_final_formacion = $request->input('eje_final_formacion');
        $informacion_usuario->nivel_formacion = $request->input('nivel_formacion');
        $informacion_usuario->modalidad_bootcamps = $request->input('modalidad_bootcamps');
        $informacion_usuario->requisitos_aceptados = $request->input('requisitos_aceptados');
        $informacion_usuario->save();


        $cadena = $request->input('numero_documento');
        /* $cadena = str_replace(' ', '-', $cadena);
        $cadena = str_replace('+', '_', $cadena); */
        $fileName = $cadena . '.pdf';
        $filePath = $request->file('url_archivo')->storeAs('uploads/' . 'documentos', $fileName, 'public');
        $informacion_usuario->documento = '/storage/' . $filePath;

        $contentMail = $informacion_usuario;

        $correo = new MatriculaExito($contentMail);
        Mail::to($informacion_usuario->correo_electronico)->send($correo);

        // Redirigir a una nueva vista con los datos
        $datos = ['mensaje' => $informacion_usuario->primer_nombre . ' ' . $informacion_usuario->primer_apellido];
        return redirect()->route('registroexitoso')->with('datos', $datos);
    }

    public function cargarVistaExito()
    {
        return view('Formularios/registroExitoso');
    }
}
