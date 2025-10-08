<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// 👈 ¡IMPORTANTE! Asegúrate de que el nombre de la clase esté aquí
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id(); // Columna 'id' auto-incremental (clave primaria)
            $table->string('nombre', 100); // Columna para el nombre
            $table->string('email', 100)->unique(); // Columna para el email (único)
            $table->timestamps(); // Columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};