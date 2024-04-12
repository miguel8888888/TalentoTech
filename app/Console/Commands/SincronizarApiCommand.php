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
    protected $description = 'Actualizar campo curso y campo prograso de la tabla participante';

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
               $participante = Participante::where('numero_documento', $item['cedula'])->first();
               if ($participante) {
                   $participante->curso = $item['curso'];
                   $participante->progreso = $item['progreso'];
                   $participante->progreso = $item['progreso'];
                   $participante->inicios_de_sesion = $item['inicios_de_sesión'];
                   $participante->nota_final = $item['nota_final'];
                   $participante->save();
               }
               $participante = null;

          }

          \Log::info('Sincronizar api');

    }
}
