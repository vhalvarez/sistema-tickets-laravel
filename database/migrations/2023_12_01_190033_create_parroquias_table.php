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
        Schema::create('parroquias', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->string('nombre');
            $table->unsignedInteger('estado_id');
            $table->unsignedInteger('municipio_id');
            $table->foreignId('pais_id')->references('id')->on('pais');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->primary(['id', 'municipio_id', 'estado_id', 'pais_id']); // Definimos la clave primaria compuesta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parroquias');
    }
};
