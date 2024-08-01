<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;
use App\Models\Cohorte;

class EstadisticasController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:estadisticas-listar', ['only' => ['mostrarDashboard', 'obtenerDatosGrafica', 'obtenerDatosGrafica7', 'obtenerDatosGrafica8', 'obtenerDatosGrafica9', 'obtenerDatosGrafica10', 'obtenerDatosGrafica11']]);
        // $this->middleware('permission:estadisticas-crear', ['only' => ['create', 'store']]);
        // $this->middleware('permission:estadisticas-editar', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:estadisticas-eliminar', ['only' => ['destroy']]);
    }
    public function mostrarDashboard()
    {
        // dd('hola');
        $ia = 'Inteligencia artificial';
        $programacion = 'Programación';
        $analisisDatos = 'Análisis de Datos';
        $blockchain = 'BlockChain';
        $arqNube = 'Arquitectura en la nube';

        //modalidad bootcamps
        $presencial = 'Presencial / híbrido';
        $virtual = 'Virtual';

        $cohortes = Cohorte::all();

        $estadoMatricula = 'Matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoInscipcion = 'Inscripción'; // Cambia esto por el estado específico que estás buscando
        $estadoPosMatricula = 'Pos-matriculado'; // Cambia esto por el estado específico que estás buscando
        $estadoPreMatricula = 'Pre-matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte1 = 'cohorte1'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte2 = 'cohorte2'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte3 = 'cohorte3'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte4 = 'cohorte4'; // Cambia esto por el estado específico que estás buscando

        //grafica1
        function obtenerDatosCohorte($estadoCohorte)
        {
            $ia = 'Inteligencia artificial';
            $programacion = 'Programación';
            $analisisDatos = 'Análisis de Datos';
            $blockchain = 'BlockChain';
            $arqNube = 'Arquitectura en la nube';
            $condiciones = ['cohorte' => $estadoCohorte];
            $ejes = [$ia, $programacion, $analisisDatos, $blockchain, $arqNube];

            $data = [];
            foreach ($ejes as $eje) {
                $data[$eje] = Participante::select('id')->where($condiciones)->where('eje_final_formacion', $eje)->count();
            }

            return $data;
        }

        $dataCohorte = [];

        foreach( $cohortes as $cohorte){
            $dataCohorte[$cohorte->id] = obtenerDatosCohorte($cohorte->nombre);
        }

        $data = obtenerDatosCohorte($estadoCohorte1);
        $data2 = obtenerDatosCohorte($estadoCohorte2);
        $data3 = obtenerDatosCohorte($estadoCohorte3);
        $data4 = obtenerDatosCohorte($estadoCohorte4);
        $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];


        // DATA GRAFICA 2
        function obtenerConteoDepartamento($variable, $departamento)
        {

            $estadoCohorte1 = 'cohorte1';
            $estadoCohorte2 = 'cohorte2';
            $estadoCohorte3 = 'cohorte3';
            $estadoCohorte4 = 'cohorte4';
            return Participante::whereIn('cohorte', [$estadoCohorte1, $estadoCohorte2, $estadoCohorte3, $estadoCohorte4])
                ->where('eje_final_formacion', $variable)
                ->where('departamento_residencia', $departamento)
                ->count();
        }
        $dataCauca = [
            obtenerConteoDepartamento($ia, 'Cauca'),
            obtenerConteoDepartamento($programacion, 'Cauca'),
            obtenerConteoDepartamento($analisisDatos, 'Cauca'),
            obtenerConteoDepartamento($blockchain, 'Cauca'),
            obtenerConteoDepartamento($arqNube, 'Cauca'),
        ];

        $dataNarino = [
            obtenerConteoDepartamento($ia, 'Nariño'),
            obtenerConteoDepartamento($programacion, 'Nariño'),
            obtenerConteoDepartamento($analisisDatos, 'Nariño'),
            obtenerConteoDepartamento($blockchain, 'Nariño'),
            obtenerConteoDepartamento($arqNube, 'Nariño'),
        ];


         // DATA GRAFICA 3
         function obtenerConteoCohorteDepartamento($variable, $departamento, $estadoCohorte)
        {

            return Participante::select('id')
                ->where('cohorte', $estadoCohorte)
                ->where('eje_final_formacion', $variable)
                ->where('departamento_residencia', $departamento)
                ->count();
        }

        $dataCaucaCohorte1 = [
            obtenerConteoCohorteDepartamento($ia, 'Cauca', 'cohorte1'),
            obtenerConteoCohorteDepartamento($programacion, 'Cauca', 'cohorte1'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Cauca', 'cohorte1'),
            obtenerConteoCohorteDepartamento($blockchain, 'Cauca', 'cohorte1'),
            obtenerConteoCohorteDepartamento($arqNube, 'Cauca', 'cohorte1'),
        ];

        $dataNarinoCohorte1 = [
            obtenerConteoCohorteDepartamento($ia, 'Nariño', 'cohorte1'),
            obtenerConteoCohorteDepartamento($programacion, 'Nariño', 'cohorte1'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Nariño', 'cohorte1'),
            obtenerConteoCohorteDepartamento($blockchain, 'Nariño', 'cohorte1'),
            obtenerConteoCohorteDepartamento($arqNube, 'Nariño', 'cohorte1'),
        ];

        $dataCaucaCohorte2 = [
            obtenerConteoCohorteDepartamento($ia, 'Cauca', 'cohorte2'),
            obtenerConteoCohorteDepartamento($programacion, 'Cauca', 'cohorte2'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Cauca', 'cohorte2'),
            obtenerConteoCohorteDepartamento($blockchain, 'Cauca', 'cohorte2'),
            obtenerConteoCohorteDepartamento($arqNube, 'Cauca', 'cohorte2'),
        ];

        $dataNarinoCohorte2 = [
            obtenerConteoCohorteDepartamento($ia, 'Nariño', 'cohorte2'),
            obtenerConteoCohorteDepartamento($programacion, 'Nariño', 'cohorte2'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Nariño', 'cohorte2'),
            obtenerConteoCohorteDepartamento($blockchain, 'Nariño', 'cohorte2'),
            obtenerConteoCohorteDepartamento($arqNube, 'Nariño', 'cohorte2'),
        ];

        $dataCaucaCohorte3 = [
            obtenerConteoCohorteDepartamento($ia, 'Cauca', 'cohorte3'),
            obtenerConteoCohorteDepartamento($programacion, 'Cauca', 'cohorte3'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Cauca', 'cohorte3'),
            obtenerConteoCohorteDepartamento($blockchain, 'Cauca', 'cohorte3'),
            obtenerConteoCohorteDepartamento($arqNube, 'Cauca', 'cohorte3'),
        ];

        $dataNarinoCohorte3 = [
            obtenerConteoCohorteDepartamento($ia, 'Nariño', 'cohorte3'),
            obtenerConteoCohorteDepartamento($programacion, 'Nariño', 'cohorte3'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Nariño', 'cohorte3'),
            obtenerConteoCohorteDepartamento($blockchain, 'Nariño', 'cohorte3'),
            obtenerConteoCohorteDepartamento($arqNube, 'Nariño', 'cohorte3'),
        ];

        $dataCaucaCohorte4 = [
            obtenerConteoCohorteDepartamento($ia, 'Cauca', 'cohorte4'),
            obtenerConteoCohorteDepartamento($programacion, 'Cauca', 'cohorte4'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Cauca', 'cohorte4'),
            obtenerConteoCohorteDepartamento($blockchain, 'Cauca', 'cohorte4'),
            obtenerConteoCohorteDepartamento($arqNube, 'Cauca', 'cohorte4'),
        ];

        $dataNarinoCohorte4 = [
            obtenerConteoCohorteDepartamento($ia, 'Nariño', 'cohorte4'),
            obtenerConteoCohorteDepartamento($programacion, 'Nariño', 'cohorte4'),
            obtenerConteoCohorteDepartamento($analisisDatos, 'Nariño', 'cohorte4'),
            obtenerConteoCohorteDepartamento($blockchain, 'Nariño', 'cohorte4'),
            obtenerConteoCohorteDepartamento($arqNube, 'Nariño', 'cohorte4'),
        ];


        // GRAFICA 4
        function obtenerConteoPorTipoFormacionYModalidad($cohorte, $labels, $departamento, $modalidad)
        {
            $data = [];

            foreach ($labels as $label) {
                $count = Participante::select('id')
                    ->where('cohorte', $cohorte)
                    ->where('eje_final_formacion', $label)
                    ->where('departamento_residencia', $departamento)
                    ->where('modalidad_bootcamps', $modalidad)
                    ->count();
                $data[$label] = $count;
            }

            return $data;
        }

        $estadoCohorte1 = 'cohorte1';
        $estadoCohorte2 = 'cohorte2';
        $estadoCohorte3 = 'cohorte3';
        $estadoCohorte4 = 'cohorte4';
        $estadoCohorte5 = 'cohorte5';
        $estadoCohorte6 = 'cohorte6';
        $estadoCohorte7 = 'cohorte7';


        $labels = [$ia, $programacion, $analisisDatos, $blockchain, $arqNube];
        $departamentoCauca = 'Cauca';
        $departamentoNarino = 'Nariño';
        $modalidadVirtual = 'virtual';
        $modalidadPresencial = 'Presencial / híbrido';

        $dataCaucaCohorte1V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte1, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte1P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte1, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte1V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte1, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte1P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte1, $labels, $departamentoNarino, $modalidadPresencial);

        $dataCaucaCohorte2V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte2, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte2P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte2, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte2V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte2, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte2P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte2, $labels, $departamentoNarino, $modalidadPresencial);

        $dataCaucaCohorte3V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte3, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte3P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte3, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte3V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte3, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte3P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte3, $labels, $departamentoNarino, $modalidadPresencial);

        $dataCaucaCohorte4V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte4, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte4P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte4, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte4V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte4, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte4P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte4, $labels, $departamentoNarino, $modalidadPresencial);

        $dataCaucaCohorte5V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte5, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte5P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte5, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte5V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte5, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte5P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte5, $labels, $departamentoNarino, $modalidadPresencial);

        $dataCaucaCohorte6V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte6, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte6P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte6, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte6V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte6, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte6P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte6, $labels, $departamentoNarino, $modalidadPresencial);

        $dataCaucaCohorte7V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte7, $labels, $departamentoCauca, $modalidadVirtual);
        $dataCaucaCohorte7P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte7, $labels, $departamentoCauca, $modalidadPresencial);
        $dataNarinoCohorte7V = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte7, $labels, $departamentoNarino, $modalidadVirtual);
        $dataNarinoCohorte7P = obtenerConteoPorTipoFormacionYModalidad($estadoCohorte7, $labels, $departamentoNarino, $modalidadPresencial);




        // // Conteo para Cauca cohorte 1 virtual
        // $dataCaucaCohorte1V = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte1)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Cauca')
        //         ->where('modalidad_bootcamps', $virtual)
        //         ->count();
        //     $dataCaucaCohorte1V[$label] = $count;
        // }

        // // Conteo para Cauca cohorte 1 presencial
        // $dataCaucaCohorte1P = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte1)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Cauca')
        //         ->where('modalidad_bootcamps', $presencial)
        //         ->count();
        //     $dataCaucaCohorte1P[$label] = $count;
        // }

        // // Conteo para Nariño cohorte 1 virtual
        // $dataNarinoCohorte1V = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte1)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Nariño')
        //         ->where('modalidad_bootcamps', $virtual)
        //         ->count();
        //     $dataNarinoCohorte1V[$label] = $count;
        // }

        // // Conteo para Nariño cohorte 1 presencial
        // $dataNarinoCohorte1P = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte1)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Nariño')
        //         ->where('modalidad_bootcamps', $presencial)
        //         ->count();
        //     $dataNarinoCohorte1P[$label] = $count;
        // }

        // // Conteo para Cauca cohorte 2 virtual
        // $dataCaucaCohorte2V = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte2)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Cauca')
        //         ->where('modalidad_bootcamps', $virtual)
        //         ->count();
        //     $dataCaucaCohorte2V[$label] = $count;
        // }

        // // Conteo para Cauca cohorte 2 presencial
        // $dataCaucaCohorte2P = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte2)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Cauca')
        //         ->where('modalidad_bootcamps', $presencial)
        //         ->count();
        //     $dataCaucaCohorte2P[$label] = $count;
        // }

        // // Conteo para Nariño cohorte 2 virtual
        // $dataNarinoCohorte2V = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte2)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Nariño')
        //         ->where('modalidad_bootcamps', $virtual)
        //         ->count();
        //     $dataNarinoCohorte2V[$label] = $count;
        // }

        // // Conteo para Nariño cohorte 2 presencial
        // $dataNarinoCohorte2P = [];
        // foreach ($labels as $label) {
        //     $count = Participante::select('id')->where('cohorte', $estadoCohorte2)
        //         ->where('eje_final_formacion', $label)
        //         ->where('departamento_residencia', 'Nariño')
        //         ->where('modalidad_bootcamps', $presencial)
        //         ->count();
        //     $dataNarinoCohorte2P[$label] = $count;
        // }

        $municipiosPorDepartamento = [
            "Nariño" => ["Albán", "Aldana", "Ancuya", "Arboleda", "Barbacoas", "Belén", "Buesaco", "Chachagüí", "Colón", "Consacá", "Contadero", "Córdoba", "Cuaspud", "Cumbal", "Cumbitara", "El Charco", "El Peñol", "El Rosario", "El Tablón De Gómez", "El Tambo", "Francisco Pizarro", "Funes", "Guachucal", "Guaitarilla", "Gualmatán", "Iles", "Imués", "Ipiales", "La Cruz", "La Florida", "La Llanada", "La Tola", "La Unión", "Leiva", "Linares", "Los Andes", "Magüí Payán", "Mallama", "Mosquera", "Nariño", "Olaya Herrera", "Ospina", "Pasto", "Policarpa", "Potosí", "Providencia", "Puerres", "Pupiales", "Ricaurte", "Roberto Payán", "Samaniego", "San Andrés De Tumaco", "San Bernardo", "San Lorenzo", "San Pablo", "San Pedro De Cartago", "Sandoná", "Santa Bárbara", "Santacruz", "Sapuyes", "Taminango", "Tangua", "Túquerres", "Yacuanquer"],
            "Cauca" => ["Almaguer", "Argelia", "Balboa", "Bolívar", "Buenos Aires", "Cajibío", "Caldono", "Caloto", "Corinto", "El Tambo", "Florencia", "Guachené", "Guapí", "Inzá", "Jambaló", "La Sierra", "La Vega", "López De Micay", "Mercaderes", "Miranda", "Morales", "Padilla", "Páez", "Patía", "Piamonte", "Piendamó", "Popayán", "Puerto Tejada", "Puracé", "Rosas", "San Sebastián", "Santa Rosa", "Santander De Quilichao", "Silvia", "Sotará", "Suárez", "Sucre", "Timbío", "Timbiquí", "Toribío", "Totoró", "Villa Rica"]
            // Puedes agregar más departamentos y sus municipios aquí
        ];

        function obtenerConteoPorMunicipioYCohorte($municipiosPorDepartamento, $cohorte)
        {
            $conteoPorMunicipio = [];

            foreach ($municipiosPorDepartamento as $departamento => $municipios) {
                foreach ($municipios as $municipio) {
                    $conteo = \DB::table('participante')
                        ->select('id')
                        ->where('municipio_residencia', $municipio)
                        ->where('cohorte', $cohorte)
                        ->count();

                    $conteoPorMunicipio[$municipio] = $conteo;
                }
            }

            return $conteoPorMunicipio;
        }

        $conteoPorMunicipioCohorte1 = obtenerConteoPorMunicipioYCohorte($municipiosPorDepartamento, 'cohorte1');
        $conteoPorMunicipioCohorte2 = obtenerConteoPorMunicipioYCohorte($municipiosPorDepartamento, 'cohorte2');
        $conteoPorMunicipioCohorte3 = obtenerConteoPorMunicipioYCohorte($municipiosPorDepartamento, 'cohorte3');
        $conteoPorMunicipioCohorte4 = obtenerConteoPorMunicipioYCohorte($municipiosPorDepartamento, 'cohorte4');


        // foreach ($municipiosPorDepartamento as $departamento => $municipios) {
        //     foreach ($municipios as $municipio) {
        //         $conteo = \DB::table('participante')
        //             ->select('id')
        //             ->where('municipio_residencia', $municipio)
        //             ->where('cohorte', 'cohorte1')
        //             ->count();

        //         $conteoPorMunicipio[$municipio] = $conteo;
        //     }
        // }
        // foreach ($municipiosPorDepartamento as $departamento => $municipios) {
        //     foreach ($municipios as $municipio) {
        //         $conteo = \DB::table('participante')
        //             ->select('id')
        //             ->where('municipio_residencia', $municipio)
        //             ->where('cohorte', 'cohorte2')
        //             ->count();

        //         $conteoPorMunicipio2[$municipio] = $conteo;
        //     }
        // }





        // dd($estadoMatricula);
        return view('admin/dashboard/estadisticas', [
            'labels' => $labels, 'data' => $data, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4,
            'dataCohorte' => $dataCohorte,
            'cohortes' => $cohortes,
            'dataCauca' => $dataCauca,
            'dataNarino' => $dataNarino,
            'dataCaucaCohorte1' => $dataCaucaCohorte1,
            'dataNarinoCohorte1' => $dataNarinoCohorte1,
            'dataCaucaCohorte2' => $dataCaucaCohorte2,
            'dataNarinoCohorte2' => $dataNarinoCohorte2,
            'dataCaucaCohorte3' => $dataCaucaCohorte3,
            'dataNarinoCohorte3' => $dataNarinoCohorte3,
            'dataCaucaCohorte4' => $dataCaucaCohorte4,
            'dataNarinoCohorte4' => $dataNarinoCohorte4,
            'dataCaucaCohorte1V' => $dataCaucaCohorte1V,
            'dataCaucaCohorte1P' => $dataCaucaCohorte1P,
            'dataNarinoCohorte1V' => $dataNarinoCohorte1V,
            'dataNarinoCohorte1P' => $dataNarinoCohorte1P,
            'dataCaucaCohorte2V' => $dataCaucaCohorte2V,
            'dataCaucaCohorte2P' => $dataCaucaCohorte2P,
            'dataNarinoCohorte2V' => $dataNarinoCohorte2V,
            'dataNarinoCohorte2P' => $dataNarinoCohorte2P,
            'dataCaucaCohorte3V' => $dataCaucaCohorte3V,
            'dataCaucaCohorte3P' => $dataCaucaCohorte3P,
            'dataNarinoCohorte3V' => $dataNarinoCohorte3V,
            'dataNarinoCohorte3P' => $dataNarinoCohorte3P,
            'dataCaucaCohorte4V' => $dataCaucaCohorte4V,
            'dataCaucaCohorte4P' => $dataCaucaCohorte4P,
            'dataNarinoCohorte4V' => $dataNarinoCohorte4V,
            'dataNarinoCohorte4P' => $dataNarinoCohorte4P,
            'dataCaucaCohorte5V' => $dataCaucaCohorte5V,
            'dataCaucaCohorte5P' => $dataCaucaCohorte5P,
            'dataNarinoCohorte5V' => $dataNarinoCohorte5V,
            'dataNarinoCohorte5P' => $dataNarinoCohorte5P,
            'dataCaucaCohorte6V' => $dataCaucaCohorte6V,
            'dataCaucaCohorte6P' => $dataCaucaCohorte6P,
            'dataNarinoCohorte6V' => $dataNarinoCohorte6V,
            'dataNarinoCohorte6P' => $dataNarinoCohorte6P,
            'dataCaucaCohorte7V' => $dataCaucaCohorte7V,
            'dataCaucaCohorte7P' => $dataCaucaCohorte7P,
            'dataNarinoCohorte7V' => $dataNarinoCohorte7V,
            'dataNarinoCohorte7P' => $dataNarinoCohorte7P,
            'conteoPorMunicipioCohorte1' => $conteoPorMunicipioCohorte1,
            'conteoPorMunicipioCohorte2' => $conteoPorMunicipioCohorte2,
            'conteoPorMunicipioCohorte3' => $conteoPorMunicipioCohorte3,
            'conteoPorMunicipioCohorte4' => $conteoPorMunicipioCohorte4,
        ]);
    }

    public function obtenerDatosGrafica(Request $request)
    {

        $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];
        // $labelsEdades = ['Adulto Mayor de 51 a 77 años', 'Adultez Intermedia de 41 a 50 años', 'Adulto joven de 26 a 40 años', 'Joven de 18 a 25 años'];
        // Obtener los parámetros de los selectores
        $cohorte = $request->input('cohorte');
        $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');

        $ia = 'Inteligencia artificial';
        $programacion = 'Programación';
        $analisisDatos = 'Análisis de Datos';
        $blockchain = 'BlockChain';
        $arqNube = 'Arquitectura en la nube';

        // Realizar la consulta a la base de datos para obtener los datos necesarios
        $dataIa = Participante::select('id')->where('cohorte', $cohorte)
            ->where('eje_final_formacion', $ia)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->count();
        $dataProgramacion = Participante::select('id')->where('cohorte', $cohorte)
            ->where('eje_final_formacion', $programacion)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->count();
        $dataAnalisisDatos = Participante::select('id')->where('cohorte', $cohorte)
            ->where('eje_final_formacion', $analisisDatos)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->count();
        $dataBlockchain = Participante::select('id')->where('cohorte', $cohorte)
            ->where('eje_final_formacion', $blockchain)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->count();
        $dataArqNube = Participante::select('id')->where('cohorte', $cohorte)
            ->where('eje_final_formacion', $arqNube)
            ->where('departamento_residencia', $departamento)
            ->where('modalidad_bootcamps', $modalidad)
            ->count();

        $data = [$dataIa, $dataProgramacion, $dataAnalisisDatos, $dataBlockchain, $dataArqNube];



        return response()->json([
            'labels' => $labels,
            // 'labelsEdades' => $labelsEdades,
            'data' => $data,
        ]);
    }

    public function obtenerDatosGrafica7(Request $request)
    {
        // dd($request);
        // $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];
        $labels = ['Adulto Mayor de 51 a 77 años', 'Adultez Intermedia de 41 a 50 años', 'Adulto joven de 26 a 40 años', 'Joven de 18 a 25 años'];
        // Obtener los parámetros de los selectores
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');

        // echo $cohorte;

        // Definir los rangos de edad
        $rangosEdad = [
            ['inicio' => 18, 'fin' => 25], // Joven de 18 a 25 años
            ['inicio' => 26, 'fin' => 40], // Adulto joven de 26 a 40 años
            ['inicio' => 41, 'fin' => 50], // Adultez Intermedia de 41 a 50 años
            ['inicio' => 51, 'fin' => 77], // Adulto Mayor de 51 a 77 años
        ];

        // Inicializar el arreglo para contar los participantes por grupo de edad
        $data = array_fill(0, count($rangosEdad), 0);


        // Realizar la consulta a la base de datos para obtener los datos necesarios
        $participantesCauca = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Cauca')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por grupo de edad
        foreach ($participantesCauca as $participanteCauca) {
            $edad = $participanteCauca->edad; // Suponiendo que 'edad' es el nombre del campo en la tabla que almacena las edades
            // Comparar la edad del participante con los rangos definidos
            foreach ($rangosEdad as $indice => $rango) {
                if ($edad >= $rango['inicio'] && $edad <= $rango['fin']) {
                    // Incrementar el conteo para el grupo de edad correspondiente
                    $data[$indice]++;
                    break; // Una vez que se encuentra el grupo de edad, se puede pasar al siguiente participante
                }
            }
        }

        $data2 = array_fill(0, count($rangosEdad), 0);
        // Realizar la consulta a la base de datos para obtener los datos necesarios
        $participantesNariño = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Nariño')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por grupo de edad
        foreach ($participantesNariño as $participanteNariño) {
            $edad = $participanteNariño->edad; // Suponiendo que 'edad' es el nombre del campo en la tabla que almacena las edades
            // Comparar la edad del participante con los rangos definidos
            foreach ($rangosEdad as $indice => $rango) {
                if ($edad >= $rango['inicio'] && $edad <= $rango['fin']) {
                    // Incrementar el conteo para el grupo de edad correspondiente
                    $data2[$indice]++;
                    break; // Una vez que se encuentra el grupo de edad, se puede pasar al siguiente participante
                }
            }
        }

        return response()->json([

            'labels' => $labels, 'data' => $data, 'data2' => $data2,
        ]);
    }

    public function obtenerDatosGrafica8(Request $request)
    {
        // dd($request);
        // $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];
        $labels = ['Estrato 1', 'Estrato 2', 'Estrato 3', 'Estrato 4', 'Estrato 5', 'Estrato 6', 'No estratificado', 'Zona rural'];
        $estratos = ['1', '2', '3', '4', '5', '6', 'No estratificado', 'Zona rural'];
        // Obtener los parámetros de los selectores
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');

        // Inicializar el arreglo para contar los participantes por estrato socioeconómico
        $data = array_fill(0, count($estratos), 0);
        // Realizar la consulta a la base de datos para obtener los datos necesarios
        $participantesCauca = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Cauca')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por estrato socioeconómico
        foreach ($participantesCauca as $participanteCauca) {
            // Convertir el estrato a un entero // Suponiendo que 'estrato' es el nombre del campo en la tabla que almacena los estratos socioeconómicos

            $estrato = $participanteCauca->estrato_socioeconomico; // Suponiendo que 'estrato' es el nombre del campo en la tabla que almacena los estratos socioeconómicos
            // Incrementar el conteo para el estrato socioeconómico correspondiente
            switch ($estrato) {
                case '1':
                    $data[0]++;
                    break;
                case '2':
                    $data[1]++;
                    break;
                case '3':
                    $data[2]++;
                    break;
                case '4':
                    $data[3]++;
                    break;
                case '5':
                    $data[4]++;
                    break;
                case '6':
                    $data[5]++;
                    break;
                case 'No estratificado':
                    $data[6]++;
                    break;
                case 'Zona rural':
                    $data[7]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }

        // Inicializar el arreglo para contar los participantes por estrato socioeconómico
        $data2 = array_fill(0, count($estratos), 0);
        // Realizar la consulta a la base de datos para obtener los datos necesarios
        $participantesNariño = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Nariño')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por estrato socioeconómico
        foreach ($participantesNariño as $participanteNariño) {
            $estrato = $participanteNariño->estrato_socioeconomico; // Suponiendo que 'estrato' es el nombre del campo en la tabla que almacena los estratos socioeconómicos
            // Incrementar el conteo para el estrato socioeconómico correspondiente
            switch ($estrato) {
                case '1':
                    $data2[0]++;
                    break;
                case '2':
                    $data2[1]++;
                    break;
                case '3':
                    $data2[2]++;
                    break;
                case '4':
                    $data2[3]++;
                    break;
                case '5':
                    $data2[4]++;
                    break;
                case '6':
                    $data2[5]++;
                    break;
                case 'No estratificado':
                    $data2[6]++;
                    break;
                case 'Zona rural':
                    $data2[7]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }



        return response()->json([

            'labels' => $labels, 'data' => $data, 'data2' => $data2,
        ]);
    }

    public function obtenerDatosGrafica9(Request $request)
    {

        $labels = ['Masculino', 'Femenino', 'Trans', 'Otro', 'No deseo responder'];
        // Obtener los parámetros de los selectores
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');

        // Inicializar el arreglo para contar los participantes por estrato socioeconómico
        $data = array_fill(0, count($labels), 0);
        // Realizar la consulta a la base de datos para obtener los datos necesarios
        $participantesCauca = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Cauca')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar el número de estudiantes para cada identidad de género
        foreach ($participantesCauca as $participanteCauca) {
            $genero = $participanteCauca->identidad_genero;
            switch ($genero) {
                case 'Masculino':
                    $data[0]++;
                    break;
                case 'Femenino':
                    $data[1]++;
                    break;
                case 'Trans':
                    $data[2]++;
                    break;
                case 'Otro':
                    $data[3]++;
                    break;
                case 'No deseo responder':
                    $data[4]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }


        $data2 = array_fill(0, count($labels), 0);

        $participantesNariño = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Nariño')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por estrato socioeconómico
        foreach ($participantesNariño as $participanteNariño) {
            $genero = $participanteNariño->identidad_genero;

            switch ($genero) {
                case 'Masculino':
                    $data2[0]++;
                    break;
                case 'Femenino':
                    $data2[1]++;
                    break;
                case 'Trans':
                    $data2[2]++;
                    break;
                case 'Otro':
                    $data2[3]++;
                    break;
                case 'No deseo responder':
                    $data2[4]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }

        return response()->json([
            'labels' => $labels, 'data' => $data, 'data2' => $data2,
        ]);
    }

    public function obtenerDatosGrafica10(Request $request)
    {

        $labels = ['Afrocolombiano', 'Palenquero', 'Comunidad Negra', 'Raizal del archipiélago de San Andrés y Providencia', 'Indígena', 'Rrom/Gitano', 'No se Autorreconoce en ninguno de los anteriores'];
        // Obtener los parámetros de los selectores
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');


        $data = array_fill(0, count($labels), 0);

        $participantesCauca = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Cauca')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();


        foreach ($participantesCauca as $participanteCauca) {
            $etnia = $participanteCauca->grupo_etnico;
            switch ($etnia) {
                case 'Afrocolombiano':
                    $data[0]++;
                    break;
                case 'Palenquero':
                    $data[1]++;
                    break;
                case 'Comunidad Negra':
                    $data[2]++;
                    break;
                case 'Raizal del archipiélago de San Andrés y Providencia':
                    $data[3]++;
                    break;
                case 'Indígena':
                    $data[4]++;
                    break;
                case 'Rrom/Gitano':
                    $data[5]++;
                    break;
                case 'No se Autorreconoce en ninguno de los anteriores':
                    $data[6]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }


        $data2 = array_fill(0, count($labels), 0);

        $participantesNariño = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Nariño')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por estrato socioeconómico
        foreach ($participantesNariño as $participanteNariño) {
            $etnia = $participanteNariño->grupo_etnico;

            switch ($etnia) {
                case 'Afrocolombiano':
                    $data2[0]++;
                    break;
                case 'Palenquero':
                    $data2[1]++;
                    break;
                case 'Comunidad Negra':
                    $data2[2]++;
                    break;
                case 'Raizal del archipiélago de San Andrés y Providencia':
                    $data2[3]++;
                    break;
                case 'Indígena':
                    $data2[4]++;
                    break;
                case 'Rrom/Gitano':
                    $data2[5]++;
                    break;
                case 'No se Autorreconoce en ninguno de los anteriores':
                    $data2[6]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }

        return response()->json([
            'labels' => $labels, 'data' => $data, 'data2' => $data2,
        ]);
    }

    public function obtenerDatosGrafica11(Request $request)
    {

        $labels = ['Adulto mayor', 'Mujer gestante', 'Víctima de conflicto armado', 'Jóvenes', 'Madre lactante', 'Firmantes de Paz', 'Discapacidad', 'Comunidad LGTBIAQ+'];
        // Obtener los parámetros de los selectores
        $cohorte = $request->input('cohorte');
        // $departamento = $request->input('departamento');
        $modalidad = $request->input('modalidad');


        $data = array_fill(0, count($labels), 0);

        $participantesCauca = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Cauca')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();


        foreach ($participantesCauca as $participanteCauca) {
            $categoria = $participanteCauca->grupo_atencion_diferencial;
            switch ($categoria) {
                case 'Adulto mayor':
                    $data[0]++;
                    break;
                case 'Mujer gestante':
                    $data[1]++;
                    break;
                case 'Víctima de conflicto armado':
                    $data[2]++;
                    break;
                case 'Jóvenes':
                    $data[3]++;
                    break;
                case 'Madre lactante':
                    $data[4]++;
                    break;
                case 'Firmantes de Paz':
                    $data[5]++;
                    break;
                case 'Discapacidad':
                    $data[6]++;
                    break;
                case 'Comunidad LGTBIAQ+':
                    $data[7]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }


        $data2 = array_fill(0, count($labels), 0);

        $participantesNariño = Participante::where('cohorte', $cohorte)
            ->where('departamento_residencia', 'Nariño')
            ->where('modalidad_bootcamps', $modalidad)
            ->get();

        // Contar participantes por estrato socioeconómico
        foreach ($participantesNariño as $participanteNariño) {
            $categoria = $participanteNariño->grupo_atencion_diferencial;
            switch ($categoria) {
                case 'Adulto mayor':
                    $data2[0]++;
                    break;
                case 'Mujer gestante':
                    $data2[1]++;
                    break;
                case 'Víctima de conflicto armado':
                    $data2[2]++;
                    break;
                case 'Jóvenes':
                    $data2[3]++;
                    break;
                case 'Madre lactante':
                    $data2[4]++;
                    break;
                case 'Firmantes de Paz':
                    $data2[5]++;
                    break;
                case 'Discapacidad':
                    $data2[6]++;
                    break;
                case 'Comunidad LGTBIAQ+':
                    $data2[7]++;
                    break;
                default:
                    // Manejar cualquier otro valor que pueda surgir
                    break;
            }
        }

        return response()->json([
            'labels' => $labels, 'data' => $data, 'data2' => $data2,
        ]);
    }
}
