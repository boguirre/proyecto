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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->integer('cod_num_preg')->nullable();
            $table->string('estado')->default(1);
            $table->unsignedBigInteger('sub_dimension_id');
            $table->foreign('sub_dimension_id')->references('id')->on('sub_dimensions');
            $table->unsignedBigInteger('tipo_r_01_id')->default(1);
            $table->foreign('tipo_r_01_id')->references('id')->on('tipo_respuestas');
            $table->integer('val_r_01')->default(20);
            $table->unsignedBigInteger('tipo_r_02_id')->default(2);
            $table->foreign('tipo_r_02_id')->references('id')->on('tipo_respuestas');
            $table->integer('val_r_02')->default(20);
            $table->unsignedBigInteger('tipo_r_03_id')->default(3);
            $table->foreign('tipo_r_03_id')->references('id')->on('tipo_respuestas');
            $table->integer('val_r_03')->default(20);
            $table->unsignedBigInteger('tipo_r_04_id')->default(4);
            $table->foreign('tipo_r_04_id')->references('id')->on('tipo_respuestas');
            $table->integer('val_r_04')->default(20);
            $table->unsignedBigInteger('tipo_r_05_id')->default(5);
            $table->foreign('tipo_r_05_id')->references('id')->on('tipo_respuestas');
            $table->integer('val_r_05')->default(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
