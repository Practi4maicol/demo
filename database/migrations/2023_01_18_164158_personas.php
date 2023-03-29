<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas',function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('rolid')->unsigned();
            $table->bigInteger('espeid')->unsigned();

            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('genero');
            $table->string('mail');
            $table->string('celular');
            $table->string('direccion');

            $table->timestamps();

            $table->foreign('rolid')->references('id')->on('roles')->onDelete("cascade");
            $table->foreign('espeid')->references('id')->on('especialidades')->onDelete("cascade");

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
