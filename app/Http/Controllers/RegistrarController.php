<?php

namespace App\Http\Controllers;

use App\Mail\CargarDocumento;
use App\Mail\MatriculaExito;
use App\Models\Horarios;
use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RegistrarController extends Controller
{
    public function guardarDatos(Request $request, $number)
    {
        $validated = $request->validate(
            [
                'primer_nombre' => ' required',
                'primer_apellido' => 'required',
                'tipo_documento' => ' required',
                'numero_documento' => ' required',
                'nacionalidad' => ' required',
                'ciudad_nacimiento' => ' required',
                'fecha_nacimiento' => ' required',
                'edad' => ' required',
                'sexo' => ' required',
                'identidad_genero_preg' => ' required',
                'orientacion_sexual' => ' required',
                'correo_electronico' => ' required',
                'celular_llamadas' => ' required',
                'whatsapp' => ' required',
                'familiar_primer_nombre' => ' required',
                'familiar_primer_apellido' => ' required',
                'familiar_tipo_documento' => ' required',
                'familiar_numero_documento' => ' required',
                'familiar_correo_electronico' => ' required',
                'familiar_celular_llamadas' => ' required',
                'familiar_whatsapp' => ' required',
                'grupo_etnico' => ' required',
                'discapacidad' => ' required',
                'grado_escolaridad' => ' required',
                'ocupacion' => ' required',
                'pais_residencia' => ' required',
                'departamento_residencia' => ' required',
                'municipio_residencia' => ' required',
                'zona_ubicacion' => ' required',
                'direccion' => ' required',
                'estrato_socioeconomico' => ' required',
                'tipo_vivienda' => ' required',
                'tenencia_vivienda' => ' required',
                'disponibilidad_formacion' => ' required',
                'horario_formacion' => ' required',
                'eje_final_formacion' => ' required',
                'nivel_formacion' => ' required',
                'modalidad_bootcamps' => ' required',
                'url_archivo' => 'required|file|mimes:pdf|max:2048',
                'requisitos_aceptados' => ' required',
            ],
            [
                'primer_nombre.required' => 'El campo primer nombre es obligatorio.',
                'primer_apellido.required' => 'El campo primer apellido es obligatorio.',
                'tipo_documento.required' => 'El campo "tipo de documento" es obligatorio.',
                'numero_documento.required' => 'El campo "numero de documento" es obligatorio.',
                'nacionalidad.required' => 'El campo "nacionalidad" es obligatorio.',
                'ciudad_nacimiento.required' => 'El campo "ciudad nacimiento" es obligatorio.',
                'fecha_nacimiento.required' => 'El campo "fecha nacimiento" es obligatorio.',
                'edad.required' => 'El campo "edad" es obligatorio.',
                'sexo.required' => 'El campo "sexo" es obligatorio.',
                'identidad_genero_preg.required' => 'El campo "pregunta identidad genero" es obligatorio.',
                'orientacion_sexual.required' => 'El campo "orientacion sexual" es obligatorio.',
                'correo_electronico.required' => 'El campo "correo electronico" es obligatorio.',
                'celular_llamadas.required' => 'El campo "celular llamadas" es obligatorio.',
                'whatsapp.required' => 'El campo "whatsapp" es obligatorio.',
                'familiar_primer_nombre.required' => 'El campo " primer nombre del familiar" es obligatorio.',
                'familiar_primer_apellido.required' => 'El campo "primer apellido del familiar" es obligatorio.',
                'familiar_tipo_documento.required' => 'El campo "tipo de documento del familiar" es obligatorio.',
                'familiar_numero_documento.required' => 'El campo "numero de documento del familiar" es obligatorio.',
                'familiar_correo_electronico.required' => 'El campo "correo electronico del familiar" es obligatorio.',
                'familiar_celular_llamadas.required' => 'El campo "celular llamadas del familiar" es obligatorio.',
                'familiar_whatsapp.required' => 'El campo "whatsapp del familiar" es obligatorio.',
                'grupo_etnico.required' => 'El campo "grupo etnico" es obligatorio.',
                'discapacidad.required' => 'El campo "discapacidad" es obligatorio.',
                'grado_escolaridad.required' => 'El campo "grado de escolaridad" es obligatorio.',
                'ocupacion.required' => 'El campo "ocupacion" es obligatorio.',
                'pais_residencia.required' => 'El campo "pais de residencia" es obligatorio.',
                'departamento_residencia.required' => 'El campo "departamento de residencia" es obligatorio.',
                'municipio_residencia.required' => 'El campo "municipio de residencia" es obligatorio.',
                'zona_ubicacion.required' => 'El campo "zona de ubicacion" es obligatorio.',
                'direccion.required' => 'El campo "direccion" es obligatorio.',
                'estrato_socioeconomico.required' => 'El campo "estrato socioeconomico" es obligatorio.',
                'tipo_vivienda.required' => 'El campo "tipo vivienda" es obligatorio.',
                'tenencia_vivienda.required' => 'El campo "tenencia vivienda" es obligatorio.',
                'disponibilidad_formacion.required' => 'El campo "disponibilidad de formacion" es obligatorio.',
                'horario_formacion.required' => 'El campo "horario de formacion" es obligatorio.',
                'eje_final_formacion.required' => 'El campo "eje final de formacion" es obligatorio.',
                'nivel_formacion.required' => 'El campo "nivel de formacion" es obligatorio.',
                'modalidad_bootcamps.required' => 'El campo "modalidad bootcamps" es obligatorio.',
                'url_archivo.required' => 'El campo archivo es obligatorio.',
                'url_archivo.file' => 'El archivo debe ser un archivo.',
                'url_archivo.mimes' => 'El archivo debe ser de tipo PDF.',
                'url_archivo.max' => 'El tamaño del archivo no debe superar los 2048 kilobytes.',
                'requisitos_aceptados.required' => 'El campo "requisitos aceptados" es obligatorio.',
            ]
        );
        // 'fecha_diligenciamiento' => 'nullable|date',

        $informacion_usuario = Participante::find($number);

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
        $informacion_usuario->estado_registro = "Pos-matriculado";
        $informacion_usuario->carga_documento = "Si";
        $informacion_usuario->aprobacion_documento = "NA";
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
        // return response()->json(['mensaje' => 'Datos procesados correctamente']);
    }

    public function cargarVistaExito()
    {
        return view('Formularios/registroExitoso');
    }

    public function consultarUsuario(Request $request)
    {
        // dd($request->has('numero_documento'));
        if ($request->has('numero_documento')) {
            $informacion_usuario =  Participante::where('numero_documento', $request->input('numero_documento'))->first();
            $CC = $request->input('numero_documento');
            $horario = Horarios::all();


            if ($informacion_usuario) {
                if ($informacion_usuario->estado_registro == "Pre-matricula") {
                    return view('Formularios/matricula', [
                        'informacion_usuario' => $informacion_usuario,
                        'horario' => $horario,
                    ]);
                } else if ($informacion_usuario->estado_registro == "Inscripción" || $informacion_usuario->estado_registro == "nueva-prueba") {
                    $mensaje = "Estimado usuario, en este momento aun no has diligenciado la prueba de conocimiento, por favor realícela en el siguiente botón.";
                    $mensaje2 = "¡INICIAR PRUEBA!";
                    $url = "https://pruebas.talentotechregion3.com.co/login.php";
                    return view('Formularios/errorUsuario', compact("mensaje", "mensaje2", "url"));
                } else if ($informacion_usuario->estado_registro == "Matricula") {
                    $mensaje = "Estimado usuario, Ya confirmaste matrícula, estaremos informando a tu correo la fecha de inicio";
                    $mensaje2 = "VOLVER!";
                    $url = "https://matricula.talentotechregion3.com.co/";
                    return view('Formularios/errorUsuario', compact("mensaje", "mensaje2", "url"));
                } else if ($informacion_usuario->estado_registro == "Pos-matriculado") {
                    $mensaje = "Estimado usuario, por temas de manejo de información, para que su matrícula sea validada, por favor cargue el tipo de documento solicitado en el siguiente botón.";
                    $mensaje2 = "¡CARGAR DOCUMENTO!";
                    $url = route('cargardocumentos', ['CC' => $CC]);
                    return view('Formularios/errorUsuario', compact("mensaje", "mensaje2", "url"));
                }
            } else {
                $mensaje = "Estimado usuario, en este momento no se encuentra inscrito, por favor regístrese en el siguiente botón.";
                $mensaje2 = "¡INICIAR PROCESO DE INSCRIPCIÓN!";
                $url = "https://matricula.talentotechregion3.com.co/inscripcion";
                return view('Formularios/errorUsuario', compact("mensaje", "mensaje2", "url"));
            }
        } else {
            return redirect("https://matricula.talentotechregion3.com.co/");
        }
    }
    public function cargardocumentos($CC)
    {
        return view('Formularios/cargardoc')->with('CC', $CC);;
    }

    public function guardarCedula(Request $request, $CC)
    {
        $validated = $request->validate(
            [
                'url_archivo_cc' => 'required|file|mimes:pdf|max:2048',
            ],
            [
                'url_archivo_cc.required' => 'El campo archivo es obligatorio.',
                'url_archivo_cc.file' => 'El archivo debe ser un archivo.',
                'url_archivo_cc.mimes' => 'El archivo debe ser de tipo PDF.',
                'url_archivo_cc.max' => 'El tamaño del archivo no debe superar los 2048 kilobytes.',
            ]
        );
        $documento_usuario = Participante::where('numero_documento', $CC)->first();
        $documento_usuario->carga_documento = "Si";
        $documento_usuario->aprobacion_documento = "NA";

        $documento_usuario->save();

        $cadena = $CC;
        $fileName = $cadena . '.pdf';
        $filePath = $request->file('url_archivo_cc')->storeAs('uploads/' . 'documentos', $fileName, 'public');
        $documento_usuario->documento = '/storage/' . $filePath;


        return redirect()->route('registroexitoso');
    }


    public function enviarCorreos()
    {
        $correoUsuarios = Participante::where('estado_registro', 'Pos-matriculado')
            ->select('correo_electronico', 'estado_registro')
            ->get();

        foreach ($correoUsuarios as $usuario) {
            $correo = new CargarDocumento();
            Mail::to($usuario->correo_electronico)->send($correo);
        }
        return redirect('/');
    }


    public function obtenerDocumentosCargados()
    {
        $carpetaAlmacenamiento = 'public/uploads/documentos';
        // Obtén la lista de archivos en la carpeta especificada
        $archivos = Storage::files($carpetaAlmacenamiento);
        // dd($archivos);
        // Imprime los nombres de los archivos
        foreach ($archivos as $archivo) {
            $docCedula = pathinfo($archivo, PATHINFO_FILENAME) . PHP_EOL;
            $nombreArchivoLimpiado = str_replace(' ', '', $docCedula);
            $nombreArchivoSinSaltos = str_replace(["\r", "\n"], '', $nombreArchivoLimpiado);

            $documento_usuario = Participante::where('numero_documento', $nombreArchivoSinSaltos)->first();
            // dd($nombreArchivoLimpiado);
            $documento_usuario->carga_documento = "Si";
            $documento_usuario->save();
        }
        echo 'datos actualizados';
    }



    public function aprobardocumento(Request $request)
    {

        $CC = $request->input('cedulaValidar');
        $Aprobado = $request->input('checked');
        // dd($CC);
        $documento_usuario = Participante::where('numero_documento', $CC)->first();
        if ($Aprobado == "Si") {
            $documento_usuario->aprobacion_documento = "Si";
            $documento_usuario->estado_registro = "Matricula";
            $documento_usuario->save();
        } elseif ($Aprobado == "No") {
            $documento_usuario->aprobacion_documento = "No";
            $documento_usuario->estado_registro = "Pos-matriculado";
            $documento_usuario->save();
        }
        // if ($documento_usuario->aprobacion_documento == "Si") {
        //     $documento_usuario->aprobacion_documento = "No";
        //     $documento_usuario->estado_registro = "Pos-matriculado";
        //     $documento_usuario->save();
        // } elseif ($documento_usuario->aprobacion_documento == "No") {
        //     $documento_usuario->aprobacion_documento = "Si";
        //     $documento_usuario->estado_registro = "Matricula";
        //     $documento_usuario->save();
        // }
        // dd($documento_usuario->aprobacion_documento);
        // $documento_usuario->save();
        // dd($documento_usuario);
        return redirect()->route('participantes.index');
    }
}
