<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::firstOrCreate(['nombre' => 'Medio ambiente'], ['descripcion' => 'Actividades de reforestación y conservación ambiental en Cusco']);
        Categoria::firstOrCreate(['nombre' => 'Educación'], ['descripcion' => 'Refuerzo escolar y talleres educativos']);
        Categoria::firstOrCreate(['nombre' => 'Protección Animal'], ['descripcion' => 'Jornadas de cuidado, rescate y adopción animal']);
    }
}