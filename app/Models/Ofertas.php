<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ofertas extends Model
{
    use HasFactory;

    protected $connection = 'mysql_second';

    protected $table = 'ofertas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'empresa_id',
        'titulo',
        'descripcion',
        'horarios',
        'jornada',
        'modalidad_trabajo',
        'tipo_contrato',
        'categoria',
        'cargo',
        'ubicacion',
        'salario',
    ];


}
