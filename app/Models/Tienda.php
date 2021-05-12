<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'telefono',
        'horarioCierre',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}