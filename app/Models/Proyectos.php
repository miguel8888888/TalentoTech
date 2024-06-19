<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'id_campista',
        'proyectos',
        'departamento',
        'tipo',
        'nombre',
        'descripcion',
        'sector',
        'area',

    ];

    public function campista()
    {
        return $this->belongsTo(Campista::class, 'id_campista', 'id');
    }
}
