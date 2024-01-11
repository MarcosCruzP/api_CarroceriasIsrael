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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo', 15)->unique();
            $table->string('Descripcion', 200);
            $table->string('Unidad', 3);     
            $table->string('Familia', 3);     
            $table->decimal('Costo Unitario', 5, 2)->nullable()->default(0.0);
            $table->decimal('Ultimo Costo', 5, 2)->nullable()->default(0.0);
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
