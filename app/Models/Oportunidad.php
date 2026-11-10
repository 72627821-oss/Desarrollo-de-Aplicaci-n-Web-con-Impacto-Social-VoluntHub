<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    use HasFactory;

    protected $table = 'oportunidades';

    protected $fillable = [
        'titulo',
        'categoria',
        'ubicacion',
        'fecha',
        'descripcion',
        'organizacion',
        'user_id',
        'imagen',
    ];

    // Relación con el usuario creador (Organización)
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con los voluntarios postulados
    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class, 'oportunidad_id');
    }
}