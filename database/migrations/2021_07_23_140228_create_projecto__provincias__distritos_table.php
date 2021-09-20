<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectoProvinciasDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projecto__provincias__distritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('projecto_id')->unsigned()->nullable();;
            $table->foreign('projecto_id')->references('id')->on('projectos')->onDelete('cascade');
            $table->bigInteger('provincia_id')->unsigned()->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->bigInteger('distrito_id')->unsigned()->nullable();
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
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
        Schema::dropIfExists('projecto__provincias__distritos');
    }
}
