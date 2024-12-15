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
        Schema::create('ilustraciones', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Nombre o descripción de la ilustración
            $table->string('url'); // URL de la ilustración
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ilustraciones');
    }
};
