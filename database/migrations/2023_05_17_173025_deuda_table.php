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
        Schema::create('deuda', function (Blueprint $table) {
            $table->id();
            $table->double('monto');
            $table->string('matricula');
            $table->unsignedBigInteger('alumno_fk');
            $table->timestamps();
            

            $table->foreign('alumno_fk')->references('id')->on('inscription'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deuda');
    }
};
