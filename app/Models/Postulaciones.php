<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Postulaciones extends Authenticatable
{

    protected $table = 'postulaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'campista_id',
        'oferta_id',
        'empresa_email',
        'estado_post',
        'created_at',
        'updated_at',

    ];

    public function info_ofertas()
    {
        return $this->hasOne(Ofertas::class, 'id', 'oferta_id');
    }
}
