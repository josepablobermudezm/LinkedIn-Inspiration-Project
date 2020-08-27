<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->increments('exID');
            $table->string('exPuesto', 50);
            $table->string('exEmpresa', 50);
            $table->unsignedInteger('exCurriculum');
            $table->foreign('exCurriculum')->references('crID')->on('curriculums');
            $table->date('exFechaInicio');
            $table->date('fechaFinal');
            $table->string('exDescripcion', 50);
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
        Schema::dropIfExists('experiencias');
    }
}
