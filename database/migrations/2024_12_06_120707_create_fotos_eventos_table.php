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
        Schema::create('fotos_eventos', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('evento_id')->constrained('eventos')->onDelete('cascade'); // Relación con la tabla eventos
            $table->string('url'); // URL de la fotografía
            $table->timestamps(); // Campos created_at y updated_at
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos_eventos');
    }
};
