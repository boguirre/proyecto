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
        Schema::create('encuestados', function (Blueprint $table) {
            $table->id();
            $table->date('fec_nac_encuestado');
            $table->date('fec_ing_encuestado');
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->unsignedBigInteger('rango_edad_id');
            $table->foreign('rango_edad_id')->references('id')->on('rango_edads');
            $table->unsignedBigInteger('rango_antiguedad_id');
            $table->foreign('rango_antiguedad_id')->references('id')->on('rango_antiguedads');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->integer('val_r_1');
            $table->integer('val_r_2');
            $table->integer('val_r_3');
            $table->integer('val_r_4');
            $table->integer('val_r_5');
            $table->integer('val_r_6');
            $table->integer('val_r_7');
            $table->integer('val_r_8');
            $table->integer('val_r_9');
            $table->integer('val_r_10');
            $table->integer('val_r_11');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuestados');
    }
};
