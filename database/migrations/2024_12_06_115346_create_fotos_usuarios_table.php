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
        Schema::create('fotos_usuarios', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade'); // Relación con el usuario
            $table->string('url'); // URL de la foto
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos_usuarios');
    }
};
