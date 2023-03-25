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
        Schema::create('suscripciones_personas_fisicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_fisica_id');
            $table->unsignedBigInteger('plan_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamps();
    
            $table->foreign('persona_fisica_id')->references('id')->on('personas_fisicas')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('planes')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suscripcion_persona_fisicas');
    }
};
