<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCategoria'; // Indicar que la clave primaria es idCategoria

    protected $fillable = ['categoria', 'imgCategoria'];
}

