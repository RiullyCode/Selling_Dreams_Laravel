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
            $table->unsignedBigInteger('maquina_id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('nombre');
            $table->integer('unidades_disponibles');
            $table->binary('foto')->nullable();
            $table->timestamps();
    
            $table->foreign('maquina_id')->references('id')->on('maquinas_expendedoras');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
