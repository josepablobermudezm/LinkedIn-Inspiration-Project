<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->increments('foID');
            $table->unsignedInteger('foCurriculum');
            $table->foreign('foCurriculum')->references('crID')->on('curriculums');
            $table->string('foTitulo', 50);
            $table->string('foEspecialidad', 50);
            $table->string('foInstitucion', 50);
            $table->date('foFecha');
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
        Schema::dropIfExists('formaciones');
    }
}
