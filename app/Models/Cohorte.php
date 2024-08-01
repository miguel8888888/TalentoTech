<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohorte extends Model
{
    use HasFactory;

    protected $table = "cohortes";

    protected $fillable = [
        'cohorte1',
        'cohorte2',
        'cohorte3',
        'cohorte4',




        // ... otros campos permitidos
    ];
}
