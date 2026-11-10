<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Oportunidad extends Model
{
    use HasFactory;

    protected $table = 'oportunidades';

    // Se autoconfigura la clave primaria real de la tabla
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        if (Schema::hasColumn('oportunidades', 'id_oportunidad')) {
            $this->primaryKey = 'id_oportunidad';
        } else {
            $this->primaryKey = 'id';
        }
    }

    protected $guarded = [];

    // Relación con postulaciones
    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class, 'oportunidad_id');
    }
}