<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    use HasFactory;

    // Conecta con la tabla exacta de MySQL en español
    protected $table = 'oportunidades';

    protected $fillable = [
        'titulo',
        'organizacion',
        'categoria',
        'ubicacion',
        'fecha',
        'descripcion',
        'imagen'
    ];
}