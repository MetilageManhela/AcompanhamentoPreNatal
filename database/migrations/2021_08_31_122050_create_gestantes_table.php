<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestantes', function (Blueprint $table) {
            
            $table->bigIncrements('id');
             $table->string('nome')->nullable();
             $table->string('nr_bi')->nullable();
             $table->date('dataNascimento')->nullable();
             $table->string('morada')->nullable();
             $table->string('estadoCivil')->nullable();
             $table->integer('nrFilhos')->nullable();
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
        Schema::dropIfExists('gestantes');
    }
}
