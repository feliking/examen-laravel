<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->integer('estudiante_id')->unsigned();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->integer('paralelo_id')->unsigned();
            $table->foreign('paralelo_id')->references('id')->on('paralelos');
            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('planes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
