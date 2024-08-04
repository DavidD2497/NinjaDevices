<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes'; // Especificar el nombre de la tabla si es diferente

    protected $fillable = [
        'user_id', 'total', 'estado', 'producto',
    ];

    protected $casts = [
        'producto' => 'array',
    ];

    // Otros métodos y relaciones
}


