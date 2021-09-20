<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostoAdministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posto_administrativos', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('distrito_id')->unsigned();
             $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');  
             $table->string('descricao')->nullable();
             $table->string('nomePostoAdministrativo')->nullable();
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
        Schema::dropIfExists('posto_administrativos');
    }
}
