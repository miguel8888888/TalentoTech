<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

class InscripcionController extends Controller
{
    public function inscripcion()
    {
        return view('Formularios.inscripcion');


    }

    public function store(Request $request)
    {
        // $validated = $request->validate(
        //     [
        //         'primer_nombre' => ' required',
        //         'primer_apellido' => 'required',
        //         // 'tipo_documento' => ' required',
        //         // 'numero_documento' => ' required',
        //         // 'nacionalidad' => ' required',
        //         // 'ciudad_nacimiento' => ' required',
        //         // 'fecha_nacimiento' => ' required',
        //         // 'edad' => ' required',
        //         // 'sexo' => ' required',
        //         // 'identidad_genero_preg' => ' required',
        //         // 'orientacion_sexual' => ' required',
        //         // 'correo_electronico' => ' required',
        //         // 'celular_llamadas' => ' required',
        //         // 'whatsapp' => ' required',
        //         // 'familiar_primer_nombre' => ' required',
        //         // 'familiar_primer_apellido' => ' required',
        //         // 'familiar_tipo_documento' => ' required',
        //         // 'familiar_numero_documento' => ' required',
        //         // 'familiar_correo_electronico' => ' required',
        //         // 'familiar_celular_llamadas' => ' required',
        //         // 'familiar_whatsapp' => ' required',
        //         // 'grupo_etnico' => ' required',
        //         // 'discapacidad' => ' required',
        //         // 'grado_escolaridad' => ' required',
        //         // 'ocupacion' => ' required',
        //         // 'pais_residencia' => ' required',
        //         // 'departamento_residencia' => ' required',
        //         // 'municipio_residencia' => ' required',
        //         // 'zona_ubicacion' => ' required',
        //         // 'direccion' => ' required',
        //         // 'estrato_socioeconomico' => ' required',
        //         // 'tipo_vivienda' => ' required',
        //         // 'tenencia_vivienda' => ' required',
        //         // 'disponibilidad_formacion' => ' required',
        //         // 'horario_formacion' => ' required',
        //         // 'eje_final_formacion' => ' required',
        //         // 'nivel_formacion' => ' required',
        //         // 'modalidad_bootcamps' => ' required',
        //         // 'url_archivo' => 'required|file|mimes:pdf|max:2048',
        //         // 'requisitos_aceptados' => ' required',
        //     ],
        //     [
        //         'primer_nombre.required' => 'El campo primer nombre es obligatorio.',
        //         'primer_apellido.required' => 'El campo primer apellido es obligatorio.',
        //         // 'tipo_documento.required' => 'El campo "tipo de documento" es obligatorio.',
        //         // 'numero_documento.required' => 'El campo "numero de documento" es obligatorio.',
        //         // 'nacionalidad.required' => 'El campo "nacionalidad" es obligatorio.',
        //         // 'ciudad_nacimiento.required' => 'El campo "ciudad nacimiento" es obligatorio.',
        //         // 'fecha_nacimiento.required' => 'El campo "fecha nacimiento" es obligatorio.',
        //         // 'edad.required' => 'El campo "edad" es obligatorio.',
        //         // 'sexo.required' => 'El campo "sexo" es obligatorio.',
        //         // 'identidad_genero_preg.required' => 'El campo "pregunta identidad genero" es obligatorio.',
        //         // 'orientacion_sexual.required' => 'El campo "orientacion sexual" es obligatorio.',
        //         // 'correo_electronico.required' => 'El campo "correo electronico" es obligatorio.',
        //         // 'celular_llamadas.required' => 'El campo "celular llamadas" es obligatorio.',
        //         // 'whatsapp.required' => 'El campo "whatsapp" es obligatorio.',
        //         // 'familiar_primer_nombre.required' => 'El campo " primer nombre del familiar" es obligatorio.',
        //         // 'familiar_primer_apellido.required' => 'El campo "primer apellido del familiar" es obligatorio.',
        //         // 'familiar_tipo_documento.required' => 'El campo "tipo de documento del familiar" es obligatorio.',
        //         // 'familiar_numero_documento.required' => 'El campo "numero de documento del familiar" es obligatorio.',
        //         // 'familiar_correo_electronico.required' => 'El campo "correo electronico del familiar" es obligatorio.',
        //         // 'familiar_celular_llamadas.required' => 'El campo "celular llamadas del familiar" es obligatorio.',
        //         // 'familiar_whatsapp.required' => 'El campo "whatsapp del familiar" es obligatorio.',
        //         // 'grupo_etnico.required' => 'El campo "grupo etnico" es obligatorio.',
        //         // 'discapacidad.required' => 'El campo "discapacidad" es obligatorio.',
        //         // 'grado_escolaridad.required' => 'El campo "grado de escolaridad" es obligatorio.',
        //         // 'ocupacion.required' => 'El campo "ocupacion" es obligatorio.',
        //         // 'pais_residencia.required' => 'El campo "pais de residencia" es obligatorio.',
        //         // 'departamento_residencia.required' => 'El campo "departamento de residencia" es obligatorio.',
        //         // 'municipio_residencia.required' => 'El campo "municipio de residencia" es obligatorio.',
        //         // 'zona_ubicacion.required' => 'El campo "zona de ubicacion" es obligatorio.',
        //         // 'direccion.required' => 'El campo "direccion" es obligatorio.',
        //         // 'estrato_socioeconomico.required' => 'El campo "estrato socioeconomico" es obligatorio.',
        //         // 'tipo_vivienda.required' => 'El campo "tipo vivienda" es obligatorio.',
        //         // 'tenencia_vivienda.required' => 'El campo "tenencia vivienda" es obligatorio.',
        //         // 'disponibilidad_formacion.required' => 'El campo "disponibilidad de formacion" es obligatorio.',
        //         // 'horario_formacion.required' => 'El campo "horario de formacion" es obligatorio.',
        //         // 'eje_final_formacion.required' => 'El campo "eje final de formacion" es obligatorio.',
        //         // 'nivel_formacion.required' => 'El campo "nivel de formacion" es obligatorio.',
        //         // 'modalidad_bootcamps.required' => 'El campo "modalidad bootcamps" es obligatorio.',
        //         // 'url_archivo.required' => 'El campo archivo es obligatorio.',
        //         // 'url_archivo.file' => 'El archivo debe ser un archivo.',
        //         // 'url_archivo.mimes' => 'El archivo debe ser de tipo PDF.',
        //         // 'url_archivo.max' => 'El tamaño del archivo no debe superar los 2048 kilobytes.',
        //         // 'requisitos_aceptados.required' => 'El campo "requisitos aceptados" es obligatorio.',
        //     ]
        // );
        // 'fecha_diligenciamiento' => 'nullable|date',

        $informacion_usuario = Participante::create([
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido' => $request->primer_apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'fecha_exp_cc' => $request->fecha_exp_cc,
            'identidad_genero' => $request->identidad_genero,
            'celular_llamadas' => $request->celular_llamadas,
            'correo_electronico' => $request->correo_electronico,
            'nacionalidad' => $request->nacionalidad,
            'departamento_residencia' => $request->departamento_residencia,
            'municipio_residencia' => $request->municipio_residencia,
            'zona_ubicacion' => $request->zona_ubicacion,
            'campesino' => $request->campesino,
            'estrato_socioeconomico' => $request->estrato_socioeconomico,
            'victima' => $request->victima,
            'grado_escolaridad' => $request->grado_escolaridad,
            'discapacidad' => $request->discapacidad,
            'tipo_discapacidad' => $request->tipo_discapacidad,
            'disponibilidad_formacion' => $request->disponibilidad_formacion,
            'eje_final_formacion' => $request->eje_final_formacion,
            'modalidad_bootcamps' => $request->modalidad_bootcamps,
            'requisitos_aceptados' => $request->requisitos_aceptados,
            'computo' => $request->computo,
            'parrafo' => $request->parrafo,
            'tratamiento_datos' => $request->tratamiento_datos,


        ]);




        $contentMail = $informacion_usuario;

        $correo = new MatriculaExito($contentMail);
        Mail::to($informacion_usuario->correo_electronico)->send($correo);

        // Redirigir a una nueva vista con los datos
        $datos = ['mensaje' => $informacion_usuario->primer_nombre . ' ' . $informacion_usuario->primer_apellido];
        return redirect()->route('registroexitoso')->with('datos', $datos);
        // return response()->json(['mensaje' => 'Datos procesados correctamente']);
    }

}
