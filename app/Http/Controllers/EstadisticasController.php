<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participante;

class EstadisticasController extends Controller
{
    public function mostrarDashboard(){

        $ia = 'Inteligencia artificial';
        $programacion = 'Programación';
        $analisisDatos = 'Análisis de Datos';
        $blockchain = 'BlockChain';
        $arqNube = 'Arquitectura en la nube';

        //modalidad bootcamps
        $presencial = 'Presencial / híbrido';
        $virtual = 'Virtual'; 

        $estadoMatricula = 'Matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoInscipcion = 'Inscripción'; // Cambia esto por el estado específico que estás buscando
        $estadoPosMatricula = 'Pos-matriculado'; // Cambia esto por el estado específico que estás buscando
        $estadoPreMatricula = 'Pre-matricula'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte1 = 'cohorte1'; // Cambia esto por el estado específico que estás buscando
        $estadoCohorte2 = 'cohorte2'; // Cambia esto por el estado específico que estás buscando
     

        $cohorte1IA = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->count();
        $cohorte1Programacion = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->count();
        $cohorte1analisisDatos = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->count();
        $cohorte1blockchain = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->count();
        $cohorte1arqNube = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->count();

        // Conteo para Cauca cohorte 1
        $cohorte1IA_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1Programacion_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1analisisDatos_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1blockchain_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Cauca')->count();
        $cohorte1arqNube_Cauca = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Cauca')->count();

        // Conteo para Nariño cohorte 1
        $cohorte1IA_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1Programacion_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1analisisDatos_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1blockchain_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Nariño')->count();
        $cohorte1arqNube_Narino = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Nariño')->count();

         // Conteo para Cauca cohorte 2
         $cohorte2IA_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2Programacion_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2analisisDatos_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2blockchain_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Cauca')->count();
         $cohorte2arqNube_Cauca = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Cauca')->count();
 
         // Conteo para Nariño cohorte 2
         $cohorte2IA_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2Programacion_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2analisisDatos_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2blockchain_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Nariño')->count();
         $cohorte2arqNube_Narino = Participante::where('cohorte', $estadoCohorte2)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Nariño')->count();
       
        $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];
        $data = [$cohorte1IA,  $cohorte1Programacion, $cohorte1analisisDatos, $cohorte1blockchain, $cohorte1arqNube];

        $dataCaucaCohorte1 = [$cohorte1IA_Cauca, $cohorte1Programacion_Cauca, $cohorte1analisisDatos_Cauca, $cohorte1blockchain_Cauca, $cohorte1arqNube_Cauca];
        $dataNarinoCohorte1 = [$cohorte1IA_Narino, $cohorte1Programacion_Narino, $cohorte1analisisDatos_Narino, $cohorte1blockchain_Narino, $cohorte1arqNube_Narino];

        $dataCaucaCohorte2 = [$cohorte2IA_Cauca, $cohorte2Programacion_Cauca, $cohorte2analisisDatos_Cauca, $cohorte2blockchain_Cauca, $cohorte2arqNube_Cauca];
        $dataNarinoCohorte2 = [$cohorte2IA_Narino, $cohorte2Programacion_Narino, $cohorte2analisisDatos_Narino, $cohorte2blockchain_Narino, $cohorte2arqNube_Narino];

        
        //conteo cauca corte1 virtual
        $cohorte1IA_CaucaV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1Programacion_CaucaV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1analisisDatos_CaucaV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1blockchain_CaucaV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1arqNube_CaucaV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $virtual)->count();  
        $dataCaucaCohorte1V = [$cohorte1IA_CaucaV, $cohorte1Programacion_CaucaV, $cohorte1analisisDatos_CaucaV, $cohorte1blockchain_CaucaV, $cohorte1arqNube_CaucaV];

        //conteo cauca corte1 presencial 
        $cohorte1IA_CaucaP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $presencial)->count();
        $cohorte1Programacion_CaucaP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $presencial)->count();
        $cohorte1analisisDatos_CaucaP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $presencial)->count();
        $cohorte1blockchain_CaucaP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $presencial)->count();
        $cohorte1arqNube_CaucaP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Cauca')->where('modalidad_bootcamps', $presencial)->count();  
        $dataCaucaCohorte1P = [$cohorte1IA_CaucaP, $cohorte1Programacion_CaucaP, $cohorte1analisisDatos_CaucaP, $cohorte1blockchain_CaucaP, $cohorte1arqNube_CaucaP];

        // Conteo para Nariño cohorte 1 virtual
        $cohorte1IA_NarinoV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1Programacion_NarinoV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1analisisDatos_NarinoV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1blockchain_NarinoV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $virtual)->count();
        $cohorte1arqNube_NarinoV = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $virtual)->count();
        $dataNarinoCohorte1V = [$cohorte1IA_NarinoV, $cohorte1Programacion_NarinoV, $cohorte1analisisDatos_NarinoV, $cohorte1blockchain_NarinoV, $cohorte1arqNube_NarinoV];

          // Conteo para Nariño cohorte 1 presencial
          $cohorte1IA_NarinoP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $ia)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $presencial)->count();
          $cohorte1Programacion_NarinoP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $programacion)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $presencial)->count();
          $cohorte1analisisDatos_NarinoP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $analisisDatos)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $presencial)->count();
          $cohorte1blockchain_NarinoP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $blockchain)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $presencial)->count();
          $cohorte1arqNube_NarinoP = Participante::where('cohorte', $estadoCohorte1)->where('eje_final_formacion', $arqNube)->where('departamento_residencia', 'Nariño')->where('modalidad_bootcamps', $presencial)->count();
          $dataNarinoCohorte1P = [$cohorte1IA_NarinoP, $cohorte1Programacion_NarinoP, $cohorte1analisisDatos_NarinoP, $cohorte1blockchain_NarinoP, $cohorte1arqNube_NarinoP];

          $municipiosPorDepartamento = [
            "Nariño" => ["Albán", "Aldana", "Ancuya", "Arboleda", "Barbacoas", "Belén", "Buesaco", "Chachagüí", "Colón", "Consacá", "Contadero", "Córdoba", "Cuaspud", "Cumbal", "Cumbitara", "El Charco", "El Peñol", "El Rosario", "El Tablón De Gómez", "El Tambo", "Francisco Pizarro", "Funes", "Guachucal", "Guaitarilla", "Gualmatán", "Iles", "Imués", "Ipiales", "La Cruz", "La Florida", "La Llanada", "La Tola", "La Unión", "Leiva", "Linares", "Los Andes", "Magüí Payán", "Mallama", "Mosquera", "Nariño", "Olaya Herrera", "Ospina", "Pasto", "Policarpa", "Potosí", "Providencia", "Puerres", "Pupiales", "Ricaurte", "Roberto Payán", "Samaniego", "San Andrés De Tumaco", "San Bernardo", "San Lorenzo", "San Pablo", "San Pedro De Cartago", "Sandoná", "Santa Bárbara", "Santacruz", "Sapuyes", "Taminango", "Tangua", "Túquerres", "Yacuanquer"],
            "Cauca" => ["Almaguer", "Argelia", "Balboa", "Bolívar", "Buenos Aires", "Cajibío", "Caldono", "Caloto", "Corinto", "El Tambo", "Florencia", "Guachené", "Guapí", "Inzá", "Jambaló", "La Sierra", "La Vega", "López De Micay", "Mercaderes", "Miranda", "Morales", "Padilla", "Páez", "Patía", "Piamonte", "Piendamó", "Popayán", "Puerto Tejada", "Puracé", "Rosas", "San Sebastián", "Santa Rosa", "Santander De Quilichao", "Silvia", "Sotará", "Suárez", "Sucre", "Timbío", "Timbiquí", "Toribío", "Totoró", "Villa Rica"]
            // Puedes agregar más departamentos y sus municipios aquí
        ];

          foreach ($municipiosPorDepartamento as $departamento => $municipios) {
            foreach ($municipios as $municipio) {
                $conteo = \DB::table('participante')
                            ->where('municipio_residencia', $municipio)
                            ->where('cohorte', 'cohorte1')
                            ->count();
        
                $conteoPorMunicipio[$municipio] = $conteo;
            }
        }


        


        // dd($estadoMatricula);
        return view('admin/dashboard/estadisticas', [
        'labels' => $labels, 'data' => $data, 
        'dataCaucaCohorte1' => $dataCaucaCohorte1, 
        'dataNarinoCohorte1' => $dataNarinoCohorte1, 
        'dataCaucaCohorte2' => $dataCaucaCohorte2, 
        'dataNarinoCohorte2' => $dataNarinoCohorte2, 
        'dataCaucaCohorte1V' => $dataCaucaCohorte1V, 
        'dataCaucaCohorte1P' => $dataCaucaCohorte1P, 
        'dataNarinoCohorte1V' => $dataNarinoCohorte1V, 
        'dataNarinoCohorte1P' => $dataNarinoCohorte1P, 
        'conteoPorMunicipio' => $conteoPorMunicipio,
        ]);
    }

    public function obtenerDatosGrafica(Request $request)
    {

      $labels = ['Inteligencia artificial', 'Programación', 'Análisis de Datos', 'BlockChain', 'Arquitectura en la nube'];
      $labelsEdades = ['Adulto Mayor de 51 a 77 años', 'Adultez Intermedia de 41 a 50 años', 'Adulto joven de 26 a 40 años', 'Joven de 18 a 25 años'];
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
        $dataIa = Participante::where('cohorte', $cohorte)
                              ->where('eje_final_formacion', $ia)
                              ->where('departamento_residencia', $departamento)
                              ->where('modalidad_bootcamps', $modalidad)
                              ->count();
        $dataProgramacion = Participante::where('cohorte', $cohorte)
                              ->where('eje_final_formacion', $programacion)
                              ->where('departamento_residencia', $departamento)
                              ->where('modalidad_bootcamps', $modalidad)
                              ->count();
        $dataAnalisisDatos = Participante::where('cohorte', $cohorte)
                              ->where('eje_final_formacion', $analisisDatos)
                              ->where('departamento_residencia', $departamento)
                              ->where('modalidad_bootcamps', $modalidad)
                              ->count();
        $dataBlockchain = Participante::where('cohorte', $cohorte)
                              ->where('eje_final_formacion', $blockchain)
                              ->where('departamento_residencia', $departamento)
                              ->where('modalidad_bootcamps', $modalidad)
                              ->count();
        $dataArqNube = Participante::where('cohorte', $cohorte)
                              ->where('eje_final_formacion', $arqNube)
                              ->where('departamento_residencia', $departamento)
                              ->where('modalidad_bootcamps', $modalidad)
                              ->count();

        $data = [$dataIa,$dataProgramacion,$dataAnalisisDatos,$dataBlockchain,$dataArqNube];


       
        return response()->json([
          'labels' => $labels, 
          'labelsEdades' => $labelsEdades, 
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
      $labels = ['Estrato 1', 'Estrato 2', 'Estrato 3', 'Estrato 4','Estrato 5', 'Estrato 6', 'No estratificado','Zona rural'];
      $estratos = ['1', '2', '3', '4', '5', '6','No estratificado','Zona rural'];
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
          $estrato = intval($participanteCauca->estrato); // Convertir el estrato a un entero // Suponiendo que 'estrato' es el nombre del campo en la tabla que almacena los estratos socioeconómicos
          // Incrementar el conteo para el estrato socioeconómico correspondiente
          $data[$estrato]++;
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
           $estrato = intval($participanteNariño->estrato); // Suponiendo que 'estrato' es el nombre del campo en la tabla que almacena los estratos socioeconómicos
           // Incrementar el conteo para el estrato socioeconómico correspondiente
           $data2[$estrato]++;
         }
 

        
        return response()->json([
         
          'labels' => $labels, 'data' => $data, 'data2' => $data2,
        ]);

    }

    public function obtenerDatosGrafica9(Request $request)
    {
    
      $labels = ['Masculino', 'Femenino', 'Trans', 'Otro','No deseo responder'];
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
    
      $labels = ['Afrocolombiano', 'Palenquero', 'Comunidad Negra', 'Raizal del archipiélago de San Andrés y Providencia','Indígena','Rrom/Gitano','No se Autorreconoce en ninguno de los anteriores'];
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
    
      $labels = ['Adulto mayor', 'Mujer gestante', 'Víctima de conflicto armado', 'Jóvenes','Madre lactante','Firmantes de Paz','Discapacidad','Comunidad LGTBIAQ+'];
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
