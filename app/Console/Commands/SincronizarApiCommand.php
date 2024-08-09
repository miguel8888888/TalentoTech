<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Participante;

class SincronizarApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sincronizar-api-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualizar campo curso y campo progreso de la tabla participante';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          // Cargar los datos externos una vez
          $url = 'https://imaster.academy/report/didactic_report/Reportes.json';
          $json = file_get_contents($url);
          $datos = json_decode($json, true)[0]['data'];

          // Iterar sobre los participantes obtenidos de la base de datos
          // Buscar la entrada correspondiente en $datos basándose en el número de documento
          foreach ($datos as $item) {
               $participante = Participante::where('numero_documento', $item['cedula'])
               ->orWhere('numero_documento', $item['usuario'])
               ->first();
               if ($participante) {
                   $participante->curso_id = $item['courseid'];
                   $participante->curso = $item['curso'];
                   $participante->progreso = $item['progreso'];
                   $participante->progreso = $item['progreso'];
                   $participante->inicios_de_sesion = $item['inicios_de_sesión'];
                   $participante->nota_final = $item['nota_final'];
                   $participante->save();
               }
               $participante = null;

          }

           // Obtener las identificaciones de los campistas
           $campistas = Campista::select('identificacion')
           ->pluck('identificacion')
           ->toArray();  // Convertir la colección a un array

           // Buscar coincidencias y actualizar campos en Participantes
           foreach ($campistas as $identificacion) {
               $participante = Participante::where('numero_documento', $identificacion)->first();
               if ($participante) {
                   $participante->plataforma_empleabilidad = 'Si';
                   $participante->hoja_de_vida_empleabilidad = 'Si';
                   // $participante->proyecto = 'si';
                   $participante->save();
               }
           }



           $campistasConProyectos = Campista::whereIn('id', function($query) {
               $query->select('id_campista')
                     ->from('proyectos');
           })->pluck('identificacion')
           ->toArray();

           foreach ($campistasConProyectos as $identificacion) {
               $participante = Participante::where('numero_documento', $identificacion)->first();
               if ($participante) {
                   $participante->proyecto_registrado = 'Si';
                   $participante->save();
               }
           }

           $campistasConPostulaciones = Campista::whereIn('id', function($query) {
               $query->select('campista_id')
                     ->from('postulaciones');
           })->pluck('identificacion')
           ->toArray();

           foreach ($campistasConPostulaciones as $identificacion) {
               $participante = Participante::where('numero_documento', $identificacion)->first();
               if ($participante) {
                   $participante->postulacion_registrada = 'Si';
                   $participante->save();
               }
           }

           // Actualizar los participantes que no coinciden con los campistas
           Participante::whereNotIn('numero_documento', $campistas)
           ->update(['plataforma_empleabilidad' => 'No', 'hoja_de_vida_empleabilidad' => 'No', 'proyecto_registrado' => 'No', 'postulacion_registrada' => 'No']);


           // Actulizar los participantes que proyecto_resgistrado es null o vacio a 'No' y tambien los que postulacion_registrada es null o vacio a 'No'
           Participante::where('proyecto_registrado', null)
           ->orWhere('proyecto_registrado', '')
           ->update(['proyecto_registrado' => 'No']);

           Participante::where('postulacion_registrada', null)
           ->orWhere('postulacion_registrada', '')
           ->update(['postulacion_registrada' => 'No']);



          \Log::info('Sincronizar api');

    }
}
