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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion_corta', 200);
            $table->string('Descripcio_largan', 600);
            $table->decimal('Medidad_ext_large', 10,2)->default(0.00)->nullable();
            $table->decimal('Medidad_ext_ancho', 10,2)->default(0.00)->nullable();
            $table->decimal('Medidad_ext_alto', 10,2)->default(0.00)->nullable();
            $table->string('Estructura', 500)->nullable();
            $table->string('Forro_ext', 400)->nullable();
            $table->string('Puertas', 450)->nullable();
            $table->string('Piso', 450)->nullable();
            $table->string('Instalacion', 450)->nullable();
            $table->string('Rampa_hidraulica', 450)->nullable();
            $table->decimal('Precio', 10,2)->default(0.00)->nullable();
            $table->string('Imagen1', 250)->nullable();
            $table->string('Imagen2', 250)->nullable();
            $table->string('Imagen3', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
