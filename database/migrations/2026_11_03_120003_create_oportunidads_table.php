<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->id('id_oportunidad');
            $table->foreignId('id_organizacion')->constrained('organizaciones', 'id_organizacion')->onDelete('cascade');
            $table->foreignId('id_categoria')->constrained('categorias', 'id_categoria')->onDelete('cascade');
            $table->string('titulo', 150);
            $table->text('descripcion');
            $table->string('ubicacion', 150);
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('cupos');
            $table->text('requisitos')->nullable();
            $table->string('estado', 50)->default('disponible');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oportunidades');
    }
};