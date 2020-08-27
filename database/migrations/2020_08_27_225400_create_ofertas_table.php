<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('ofID');
            $table->string('ofNombre', 50);
            $table->string('ofUbicacion', 300);
            $table->double('ofSueldo', 8, 2);
            $table->string('ofDescripcion', 300);
            $table->unsignedBigInteger('ofCategoria');
            $table->foreign('ofCategoria')->references('id')->on('categorias');
            $table->date('ofHorario', 300);
            $table->date('ofFechaInicio');
            $table->date('ofFechaFinal');
            $table->double('ofVacantes', 8, 0);
            $table->unsignedBigInteger('ofEmpresa');
            $table->foreign('ofEmpresa')->references('id')->on('users');
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
        Schema::dropIfExists('ofertas');
    }
}
