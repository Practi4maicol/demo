<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Citas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('citas',function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('espeid')->unsigned();
            $table->bigInteger('rolid')->unsigned();
            $table->bigInteger('perid')->unsigned();


            $table->string('tituloCita');
            $table->date('fechaInicio')->nullable();
            $table->time('horaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->time('horaFin')->nullable();
            $table->string('descripción');
            $table->string('motivoConsulta');

            $table->timestamps();

            $table->foreign('espeid')->references('id')->on('especialidades')->onDelete("cascade");

            $table->foreign('rolid')->references('id')->on('roles')->onDelete("cascade");

            $table->foreign('perid')->references('id')->on('personas')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
