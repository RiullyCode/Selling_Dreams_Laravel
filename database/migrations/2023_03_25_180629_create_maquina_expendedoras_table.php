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
        Schema::create('maquinas_expendedoras', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitud', 9, 6);
            $table->decimal('longitud', 9, 6);
            $table->string('calle');
            $table->string('codigo_postal', 10);
            $table->unsignedBigInteger('empresa_id');
            $table->json('estocaje');
            $table->timestamps();
            
            $table->foreign('empresa_id')->references('id')->on('personas_juridicas');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquina_expendedoras');
    }
};
