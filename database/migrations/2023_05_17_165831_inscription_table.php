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
        Schema::create('inscription', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('matricula');
            $table->string('enterado');
            $table->string('equipo');
            $table->string('factura');
            $table->string('formapago');
            $table->unsignedBigInteger('curso_fk');
            $table->Integer('deuda');
            $table->timestamps();


            $table->foreign('curso_fk')->references('id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
