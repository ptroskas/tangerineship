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
        Schema::create('perfil_personalizacion', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade'); // Clave foránea para usuario
            $table->boolean('viajar')->default(false);
            $table->boolean('leer')->default(false);
            $table->boolean('series_pelis')->default(false);
            $table->boolean('juegos')->default(false);
            $table->boolean('baile')->default(false);
            $table->boolean('arte')->default(false);
            $table->boolean('cocinar')->default(false);
            $table->boolean('fotografia')->default(false);
            $table->boolean('deportes')->default(false);
            $table->boolean('tecnologias')->default(false);
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_personalizacion');
    }
};
