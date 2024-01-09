<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function guardarDatos(Request $request)
    {
        $validated = $request->validate([
            'primer_nombre' => 'nullable|string|max:50',
            'segundo_nombre' => 'nullable|string|max:50',
            'primer_apellido' => 'nullable|string|max:50',
            'segundo_apellido' => 'nullable|string|max:50',
        ]);
        // 'fecha_diligenciamiento' => 'nullable|date',

        $informacion_usuario = new Participante();
        // $informacion_usuario->fecha_diligenciamiento = ($request->input('roles'));
        // $informacion_usuario->primer_nombre = ($request->input('primer-nombre'));
        // $informacion_usuario->segundo_nombre = ($request->input('segundo-nombre'));
        // $informacion_usuario->primer_apellido = ($request->input('primer-apellido'));
        // $informacion_usuario->segundo_apellido = ($request->input('segundo-apellido'));
        $informacion_usuario->save($validated);


        return redirect('/');
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