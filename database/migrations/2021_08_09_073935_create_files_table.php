<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
    
              $table->increments('id');
              $table->bigInteger('projecto_id')->unsigned()->nullable();
              $table->foreign('projecto_id')->references('id')->on('projectos')->onDelete('cascade');  ;
              $table->string('filename')->nullable();
              $table->string('descricao')->nullable();
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
        Schema::dropIfExists('files');
    }
}
