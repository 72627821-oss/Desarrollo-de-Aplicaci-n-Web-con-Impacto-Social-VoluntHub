<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Schema;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'telefono',
        'nombre_organizacion',
        'ruc',
        'descripcion_org',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Métodos para verificar rol
    public function esVoluntario()
    {
        return $this->role === 'voluntario';
    }

    public function esOrganizacion()
    {
        return $this->role === 'organizacion';
    }

    // Relación con Oportunidades Favoritas
    public function favoritos()
    {
        $foreignKeyOportunidad = Schema::hasColumn('oportunidades', 'id_oportunidad') ? 'id_oportunidad' : 'id';
        
        return $this->belongsToMany(
            Oportunidad::class,
            'favoritos',
            'user_id',
            'oportunidad_id',
            'id',
            $foreignKeyOportunidad
        );
    }
}