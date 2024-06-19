<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Campista extends Model
{
    use HasFactory;

    protected $connection = 'mysql_second';

    protected $table = 'campista';

    protected $fillable = [
        'email',
        'direccion',
        'nombre',
        'identificacion',
        'departamento',
        'municipio',
        'telefono',
        'tipo_identificacion',
        'cv',
        'bootcamp'
    ];
}
