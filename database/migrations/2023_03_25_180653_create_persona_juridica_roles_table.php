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
        Schema::create('personas_juridicas_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('persona_juridica_id');
            $table->unsignedBigInteger('rol_id');
            $table->timestamps();
    
            $table->primary(['persona_juridica_id', 'rol_id']);
            $table->foreign('persona_juridica_id')->references('id')->on('personas_juridicas')->onDelete('cascade');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_juridica_roles');
    }
};
