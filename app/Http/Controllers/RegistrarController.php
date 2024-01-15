<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrarController extends Controller
{
    public function guardarDatos(Request $request)
    {
        $validated = $request->validate([
            'numero_documento' => ' required',
            'primer_nombre' => ' required',
            'primer_apellido' => 'required',

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
        return view('Formularios/registroExitoso', compact('informacion_usuario'));
    }
}

// 'tipo_documento' => 'nullable|in:cedula',
//             'numero_documento' => 'nullable|string|max:12',
//             'nacionalidad' => 'nullable|string|max:50',
//             'ciudad_nacimiento' => 'nullable|string|max:50',
//             'fecha_nacimiento' => 'nullable|date',
//             'edad' => 'nullable|integer',
//             'sexo' => 'nullable|in:Hombre,Mujer,Intersex',
//             'identidad_genero_preg' => 'nullable|in:Si,No',
//             'identidad_genero' => 'nullable|in:Femenino,Masculino,Trans,Otro,No deseo responder',
//             'orientacion_sexual' => 'nullable|in:Heterosexualidad,Homosexualidad,Bisexualidad,Otros,No deseo responder',
//             'correo_electronico' => 'nullable|string|email|max:100',
//             'celular_llamadas' => 'nullable|string|max:20',
//             'whatsapp' => 'nullable|string|max:20',
//             'familiar_primer_nombre' => 'nullable|string|max:50',
//             'familiar_segundo_nombre' => 'nullable|string|max:50',
//             'familiar_primer_apellido' => 'nullable|string|max:50',
//             'familiar_segundo_apellido' => 'nullable|string|max:50',
//             'familiar_tipo_documento' => 'nullable|in:CC,TI,CE,PA,TMF,PEP,Visa',
//             'familiar_numero_documento' => 'nullable|string|max:20',
//             'familiar_correo_electronico' => 'nullable|string|email|max:100',
//             'familiar_celular_llamadas' => 'nullable|string|max:20',
//             'familiar_whatsapp' => 'nullable|string|max:20',
//             'grupo_etnico' => 'nullable|in:Afrocolombiano,Palenquero,Comunidad Negra,Raizal del archipiélago de San Andrés y Providencia,Indígena,Rrom/Gitano,No se Autoreconoce en ninguno de los anteriores',
//             'discapacidad' => 'nullable|in:Si,No',
//             'discapacidad_certificada' => 'nullable|in:Si,No',
//             'tipo_discapacidad' => 'nullable|in:Discapacidad auditiva,Sensorial, Gusto, Olfato, Tacto,Discapacidad psicosocial (mental),Discapacidad sordoceguera,Piel, pelo y uñas,Discapacidad intelectual,Discapacidad física,Sistémica,Discapacidad visual,Discapacidad múltiple,Voz y habla',
//             'segun_discapacidad' => 'nullable|in:El beneficiario cuenta con la ayuda técnica/Producto de apoyo.,El beneficiario requiere la ayuda de otra persona.,El beneficiario requiere terapia y/o rehabilitación.,El beneficiario requiere ayuda técnica/Producto de apoyo.,El beneficiario recibe atención en terapia y/o rehabilitación.',
//             'grupo_atencion_diferencial' => 'nullable|in:Adulto mayor,Mujer gestante,Víctima de conflicto armado,Jóvenes,Grupo Étnico,Madre lactante,Firmantes de Paz,Discapacidad,Comunidad LGTBIAQ+',
//             'grado_escolaridad' => 'nullable|in:Bachillerato,Profesional,Técnica,Posgrado,Tecnológico',
//             'ocupacion' => 'nullable|in:Obrero o empleado del Gobierno,Estudiante,Independiente,Labores del Hogar,Emprendedor,Obrero o empleado de empresa particular,Desempleado',
//             'profesion' => 'nullable|string|max:100',
//             'pais_residencia' => 'nullable|string|max:50',
//             'departamento_residencia' => 'nullable|string|max:50',
//             'municipio_residencia' => 'nullable|string|max:50',
//             'zona_ubicacion' => 'nullable|in:Rural,Urbana',
//             'zona_resto' => 'nullable|string|max:100',
//             'corregimiento_nombre' => 'nullable|string|max:50',
//             'barrio_nombre' => 'nullable|string|max:50',
//             'vereda_nombre' => 'nullable|string|max:50',
//             'direccion' => 'nullable|string|max:100',
//             'estrato_socioeconomico' => 'nullable|integer',
//             'tipo_vivienda' => 'nullable|in:Habitación o Cuarto,Inquilinato,Casa,Albergue (Vivienda temporal),Casa lote,Apartamento,Vivienda indígena,Palafito',
//             'tenencia_vivienda' => 'nullable|in:Propia,Arriendo,Familiar,Albergue,Lugar de trabajo,Posada (vivienda otra persona sin pagar),Asentamiento- Invasión,Paga Diario',
//             'servicios_basicos' => 'nullable|in:Agua,Alcantarillado,Energía eléctrica,Internet,Telefonía fija o móvil,Plan de datos o recargas,Ninguna de las Anteriores',
//             'equipos_tecnologicos' => 'nullable|string|max:255',
//             'disponibilidad_formacion' => 'nullable|in:Si,No',
//             'horario_formacion' => 'nullable|in:Opción 1 (Lunes a Viernes de 10am a 12m),Opción 2 (Lunes a viernes de 2pm a 4pm),Opción 3 (Martes a jueves de 6am a 8am y sábados de 8am a 12m),Opción 4 (Martes a jueves de 6pm a 8pm y sábados de 2pm a 6pm)',
//             'eje_final_formacion' => 'nullable|in:Análisis de Datos,Inteligencia artificial,Arquitectura en la nube,BlockChain,Programación',
//             'nivel_formacion' => 'nullable|in:Explorador (Básico),Integrador (Intermedio),Innovador (Avanzado)',
//             'modalidad_bootcamps' => 'nullable|in:Presencial / híbrido,Virtual',
//             'requisitos_aceptados' => 'nullable|in:Si,No'