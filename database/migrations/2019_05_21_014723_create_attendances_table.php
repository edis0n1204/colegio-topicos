<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('students');
            $table->unsignedBigInteger('horario_id');
            $table->foreign('horario_id')->references('id')->on('schedules');
            $table->date('fecha_emision');
            $table->tinyInteger('tipo_asistencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
