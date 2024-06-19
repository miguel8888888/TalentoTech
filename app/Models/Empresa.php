<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $connection = 'mysql_second';


    protected $table = 'empresa';

    protected $fillable = [
        'email',
        'direccion',
        'nombre',
        'num_identificacion',
        'departamento',
        'municipio',
        'telefono',
        'nombre_representante',
        'celular_representante',
        'correo_representante',
        'nombre_contacto',
        'celular_contacto',
        'cargo_contacto',
        'correo_contacto',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function ofertas()
    {
        return $this->hasMany(Ofertas::class, 'empresa_id', 'id_user');
    }
}
