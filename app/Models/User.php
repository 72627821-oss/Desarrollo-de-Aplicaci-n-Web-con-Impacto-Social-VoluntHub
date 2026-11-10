<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'nombre_organizacion',
        'descripcion_organizacion',
        'telefono',
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

    public function esOrganizacion(): bool
    {
        return $this->role === 'organizacion';
    }

    public function esVoluntario(): bool
    {
        return $this->role === 'voluntario';
    }

    // Relación con Oportunidades Favoritas
    public function favoritos()
    {
        return $this->belongsToMany(Oportunidad::class, 'favoritos', 'user_id', 'oportunidad_id')->withTimestamps();
    }
}