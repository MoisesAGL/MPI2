<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('informatica', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudiante_id') // Clave foránea hacia la tabla estudiantes
                  ->constrained('estudiantes') // Hace referencia a la tabla 'estudiantes'
                  ->restrictOnUpdate()  // Actualiza los registros relacionados si el estudiante es eliminado
                  ->restrictOnDelete(); // Elimina los registros relacionados si el estudiante es eliminado
            $table->integer('nota');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informatica');
    }
};
