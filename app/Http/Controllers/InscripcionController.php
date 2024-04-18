<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscripcionExitoMailable;

class InscripcionController extends Controller
{
    public function inscripcion()
    {
        return view('Formularios.inscripcion');


    }

    public function store(Request $request)
    {

        $existeCedula = Participante::where('numero_documento', $request->numero_documento)->first();

        if ($existeCedula) {
            $mensaje = "¡El número de identificación ya está registrado!";
            $mensaje2 = "VOLVER!";
            $url = url()->previous();
            return view('Formularios/errorUsuario', compact("mensaje", "mensaje2", "url"));
        }



        // var_dump($request->municipio_residencia);




        $validated = $request->validate(
            [
                'primer_nombre' => ' required',
                'primer_apellido' => 'required',
                'tipo_documento' => ' required',
                'numero_documento' => ' required',
                'fecha_nacimiento' => ' required',
                'fecha_exp_cc' => ' required',
                'identidad_genero' => ' required',
                'celular_llamadas' => ' required',
                'correo_electronico' => ' required',
                'nacionalidad' => ' required',
                'departamento_residencia' => ' required',
                'municipio_residencia' => ' required',
                'zona_ubicacion' => ' required',
                'campesino' => ' required',
                'estrato_socioeconomico' => ' required',
                'grado_escolaridad' => ' required',
                'discapacidad' => ' required',
                'disponibilidad_formacion' => ' required',
                'eje_final_formacion' => ' required',
                'modalidad_bootcamps' => ' required',
                'requisitos_aceptados' => ' required',
                'motivaciones' => ' required',
            ],
            [
                'primer_nombre.required' => 'El campo primer nombre es obligatorio.',
                'primer_apellido.required' => 'El campo primer apellido es obligatorio.',
                'tipo_documento.required' => 'El campo tipo de documento es obligatorio.',
                'numero_documento.required' => 'El campo número de documento es obligatorio.',
                'fecha_nacimiento.required' => 'El campo fecha de nacimiento es obligatorio.',
                'fecha_exp_cc.required' => 'El campo fecha de expedición de la cédula es obligatorio.',
                'identidad_genero.required' => 'El campo identidad de género es obligatorio.',
                'celular_llamadas.required' => 'El campo celular para llamadas es obligatorio.',
                'correo_electronico.required' => 'El campo correo electrónico es obligatorio.',
                'nacionalidad.required' => 'El campo nacionalidad es obligatorio.',
                'departamento_residencia.required' => 'El campo departamento de residencia es obligatorio.',
                'municipio_residencia.required' => 'El campo municipio de residencia es obligatorio.',
                'zona_ubicacion.required' => 'El campo zona de ubicación es obligatorio.',
                'campesino.required' => 'El campo campesino es obligatorio.',
                'estrato_socioeconomico.required' => 'El campo estrato socioeconómico es obligatorio.',
                'grado_escolaridad.required' => 'El campo grado de escolaridad es obligatorio.',
                'discapacidad.required' => 'El campo discapacidad es obligatorio.',
                'disponibilidad_formacion.required' => 'El campo disponibilidad para formación es obligatorio.',
                'eje_final_formacion.required' => 'El campo eje final de formación es obligatorio.',
                'modalidad_bootcamps.required' => 'El campo modalidad de bootcamps es obligatorio.',
                'requisitos_aceptados.required' => 'El campo requisitos aceptados es obligatorio.',
                'motivaciones.required' => 'El campo motivaciones es obligatorio.',
            ]
        );

        function quitarTildes($cadena) {
            $tildes = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
            $sinTildes = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'n', 'N');

            $cadena = str_replace($tildes, $sinTildes, $cadena);

            return $cadena;
        }

        function getCodigoDepartamento($departamentoNombre) {
            $departamentos = [
                "Cauca" => 19,
                "Nariño" => 52,
            ];
            return $departamentos[$departamentoNombre] ?? null;
        }

        function getCodigoMunicipio($municipioNombre)
        {
            $municipios = [
                "Albán" => 52019,
                "Aldana" => 52022,
                "Ancuya" => 52036,
                "Arboleda" => 52051,
                "Barbacoas" => 52079,
                "Belén" => 52083,
                "Buesaco" => 52110,
                "Chachagüí" => 52240,
                "Colón" => 52203,
                "Consacá" => 52207,
                "Contadero" => 52210,
                "Córdoba" => 52215,
                "Cuaspud" => 52224,
                "Cumbal" => 52227,
                "Cumbitara" => 52233,
                "El Charco" => 52250,
                "El Peñol" => 52254,
                "El Rosario" => 52256,
                "El Tablón De Gómez" => 52258,
                "El Tambo" => 52260,
                "Francisco Pizarro" => 52520,
                "Funes" => 52287,
                "Guachucal" => 52317,
                "Guaitarilla" => 52320,
                "Gualmatán" => 52323,
                "Iles" => 52352,
                "Imués" => 52354,
                "Ipiales" => 52356,
                "La Cruz" => 52378,
                "La Florida" => 52381,
                "La Llanada" => 52385,
                "La Tola" => 52390,
                "La Unión" => 52399,
                "Leiva" => 52405,
                "Linares" => 52411,
                "Los Andes" => 52418,
                "Magüí Payán" => 52427,
                "Mallama" => 52435,
                "Mosquera" => 52473,
                "Nariño" => 52480,
                "Olaya Herrera" => 52490,
                "Ospina" => 52506,
                "Pasto" => 52001,
                "Policarpa" => 52540,
                "Potosí" => 52560,
                "Providencia" => 52565,
                "Puerres" => 52573,
                "Pupiales" => 52585,
                "Ricaurte" => 52612,
                "Roberto Payán" => 52621,
                "Samaniego" => 52678,
                "San Andrés De Tumaco" => 52835,
                "San Bernardo" => 52685,
                "San Lorenzo" => 52687,
                "San Pablo" => 52693,
                "San Pedro De Cartago" => 52694,
                "Sandoná" => 52683,
                "Santa Bárbara" => 52696,
                "Santacruz" => 52699,
                "Sapuyes" => 52720,
                "Taminango" => 52786,
                "Tangua" => 52788,
                "Túquerres" => 52838,
                "Yacuanquer" => 52885,
                "Argelia" => 19050,
        "Almaguer" => 19022,
        "Balboa" => 19075,
        "Bolívar" => 19100,
        "Buenos Aires" => 19110,
        "Cajibío" => 19130,
        "Caldono" => 19137,
        "Caloto" => 19142,
        "Corinto" => 19212,
        "El Tambo" => 19256,
        "Florencia" => 19290,
        "Guachené" => 19310,
        "Guapí" => 19318,
        "Inzá" => 19355,
        "Jambaló" => 19364,
        "La Sierra" => 19392,
        "La Vega" => 19397,
        "López De Micay" => 19418,
        "Mercaderes" => 19450,
        "Miranda" => 19455,
        "Morales" => 19473,
        "Padilla" => 19513,
        "Páez" => 19517,
        "Patía" => 19532,
        "Piamonte" => 19533,
        "Piendamó" => 19548,
        "Popayán" => 19001,
        "Puerto Tejada" => 19573,
        "Puracé" => 19585,
        "Rosas" => 19622,
        "San Sebastián" => 19693,
        "Santa Rosa" => 19701,
        "Santander De Quilichao" => 19698,
        "Silvia" => 19743,
        "Sotará" => 19760,
        "Suárez" => 19780,
        "Sucre" => 19785,
        "Timbío" => 19807,
        "Timbiquí" => 19809,
        "Toribío" => 19821,
        "Totoró" => 19824,
        "Villa Rica" => 19845
            ];

            return $municipios[$municipioNombre] ?? null;
        }
        $municipioNombre = strval($request->municipio_residencia);
        $departamentoNombre = strval($request->departamento_residencia);
        $codigoMunicipio = getCodigoMunicipio($municipioNombre);
        $codigoDepartamento = getCodigoDepartamento($departamentoNombre);



        $informacion_usuario = Participante::create([
            'primer_nombre' => strtoupper(quitarTildes($request->primer_nombre)),
            'segundo_nombre' => strtoupper(quitarTildes($request->segundo_nombre)),
            'primer_apellido' => strtoupper(quitarTildes($request->primer_apellido)),
            'segundo_apellido' => strtoupper(quitarTildes($request->segundo_apellido)),
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'fecha_exp_cc' => $request->fecha_exp_cc,
            'identidad_genero' => $request->identidad_genero,
            'celular_llamadas' => $request->celular_llamadas,
            'correo_electronico' => $request->correo_electronico,
            'nacionalidad' => $request->nacionalidad,
            'departamento_residencia' => $request->departamento_residencia,
            'municipio_residencia' => strtoupper(quitarTildes($request->municipio_residencia)),
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
            'motivaciones' => $request->motivaciones,
            'tratamiento_datos' => $request->tratamiento_datos,
            'codigo_municipio' => $codigoMunicipio,
            'codigo_departamento' => $codigoDepartamento,
            'estado_registro' => "Inscripción",

        ]);





        // $contentMail = $informacion_usuario;

        $correo = new InscripcionExitoMailable();
        Mail::to($informacion_usuario->correo_electronico)->send($correo);

        // Redirigir a una nueva vista con los datos
        $datos = ['mensaje' => $informacion_usuario->primer_nombre . ' ' . $informacion_usuario->primer_apellido];
        return redirect()->route('inscripcionexitosa')->with('datos', $datos);
        // return response()->json(['mensaje' => 'Datos procesados correctamente']);
    }

    public function cargarVistaExito()
    {
        return view('Formularios/inscripcionExitosa');
    }



}
