<?php

namespace App\Exports;

use App\Models\Participante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CampistasExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $filters;

    public function __construct($filters)
    {
        $this->filters = $filters;
    }

    public function collection()
    {
        $query = Participante::select('numero_documento', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'departamento_residencia', 'cohorte', 'eje_final_formacion', 'nivel_formacion', 'modalidad_bootcamps', 'estado_registro', 'inicios_de_sesion','fecha_inicio_formacion', 'estado_de_formacion', 'plataforma_empleabilidad', 'hoja_de_vida_empleabilidad', 'proyecto_registrado', 'postulacion_registrada')
            ->where('primer_nombre', '!=', null)
            ->whereNotNull('cohorte');

        if (!empty($this->filters['buscar'])) {
            $buscar = $this->filters['buscar'];
            $query->where(function ($query) use ($buscar) {
                $query->where('primer_nombre', 'LIKE', '%' . $buscar . '%')
                    ->orWhere('numero_documento', 'LIKE', '%' . $buscar . '%')
                    ->orWhere('estado_registro', 'LIKE', '%' . $buscar . '%');
            });
        }

        if (!empty($this->filters['cohorte'])) {
            $query->where('cohorte', $this->filters['cohorte']);
        }

        if (!empty($this->filters['departamento_residencia'])) {
            $query->where('departamento_residencia', $this->filters['departamento_residencia']);
        }

        if (!empty($this->filters['eje_final_formacion'])) {
            $query->where('eje_final_formacion', $this->filters['eje_final_formacion']);
        }

        if (!empty($this->filters['modalidad_bootcamps'])) {
            $query->where('modalidad_bootcamps', $this->filters['modalidad_bootcamps']);
        }

        return $query->get();
    }


    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true, 'size' => 14]],
        ];
    }
}
