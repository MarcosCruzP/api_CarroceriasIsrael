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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 200);
            $table->string('Contacto', 15)->nullable();
            $table->string('Email', 100)->nullable();
            $table->string('Calle', 100)->nullable();
            $table->string('CP', 10)->nullable();
            $table->string('Municipio', 100)->nullable();
            $table->string('Estado', 100)->nullable();
            $table->string('url_map', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
