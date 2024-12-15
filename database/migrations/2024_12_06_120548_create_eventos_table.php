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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('empresa_id')->constrained('empresas')->onDelete('cascade'); // Relación con la tabla empresas
            $table->dateTime('fecha_inicio'); // Fecha de inicio del evento
            $table->dateTime('fecha_fin'); // Fecha de fin del evento
            $table->text('descripcion'); // Descripción del evento
            $table->timestamps(); // Campos created_at y updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
