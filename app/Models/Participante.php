<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $table = "participante";

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'tipo_documento',
        'numero_documento',
        'fecha_nacimiento',
        'fecha_exp_cc',
        'identidad_genero',
        'celular_llamadas',
        'correo_electronico',
        'nacionalidad',
        'departamento_residencia',
        'municipio_residencia',
        'zona_ubicacion',
        'campesino',
        'estrato_socioeconomico',
        'grupo_etnico',
        // 'victima',
        'grado_escolaridad',
        'discapacidad',
        'tipo_discapacidad',
        'disponibilidad_formacion',
        'eje_final_formacion',
        'modalidad_bootcamps',
        'requisitos_aceptados',
        // 'computo',
        'codigo_municipio',
        'codigo_departamento',
        'motivaciones',
        'estado_registro',
        // 'parrafo',
        // 'tratamiento_datos',


        // ... otros campos permitidos
    ];
}
