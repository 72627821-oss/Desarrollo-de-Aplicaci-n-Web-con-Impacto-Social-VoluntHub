<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    use HasFactory;

    protected $table = 'postulaciones';

    protected $fillable = [
        'user_id',
        'oportunidad_id',
        'estado',
        'mensaje',
    ];

    public function voluntario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function oportunidad()
    {
        return $this->belongsTo(Oportunidad::class, 'oportunidad_id');
    }
}