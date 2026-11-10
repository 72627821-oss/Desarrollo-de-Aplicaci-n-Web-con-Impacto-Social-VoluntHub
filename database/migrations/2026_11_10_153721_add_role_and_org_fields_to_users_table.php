<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('voluntario')->after('email');
            $table->string('nombre_organizacion')->nullable()->after('role');
            $table->text('descripcion_organizacion')->nullable()->after('nombre_organizacion');
            $table->string('telefono')->nullable()->after('descripcion_organizacion');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'nombre_organizacion', 'descripcion_organizacion', 'telefono']);
        });
    }
};