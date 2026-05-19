<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre',
        'foto',
        'generacion',
        'cargo',
        'empresa',
        'area',
        'descripcion',
        'cita',
        'linkedin',
        'destacado'
    ];
    protected $casts = [
    'destacado' => 'boolean',
];
}