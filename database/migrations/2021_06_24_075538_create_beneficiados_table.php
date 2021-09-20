<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiados', function (Blueprint $table) {
           
            $table->timestamps();
            $table->bigIncrements('id');
             //$table->bigInteger('provincia_id')->unsigned();
            //$table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->string('nome')->nullable();
            $table->string('endereco')->nullable();
            $table->string('email')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('postoAdministrativo')->nullable(); 
            $table->string('data')->nullable();
            $table->string('sexo')->nullable();
            $table->string('projecto')->nullable();
            $table->string('nuit')->nullable();
           
            
            
           

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiados');
    }
}
