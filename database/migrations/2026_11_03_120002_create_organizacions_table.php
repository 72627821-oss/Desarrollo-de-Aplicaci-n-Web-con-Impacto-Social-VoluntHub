<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organizaciones', function (Blueprint $table) {
            $table->id('id_organizacion');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->string('direccion', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organizaciones');
    }
};