<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicoSaudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnico__saudes', function (Blueprint $table) {
             $table->bigIncrements('id'); 
             $table->string('nome')->nullable();
             $table->string('sexo')->nullable();
             $table->string('nr_bi')->nullable();
             $table->string('dataNascimento')->nullable();
             $table->string('morada')->nullable();
             $table->string('estadoCivil')->nullable();
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
        Schema::dropIfExists('tecnico__saudes');
    }
}
