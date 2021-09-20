<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectoFinanciadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projecto__financiadors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('projecto_id')->unsigned()->nullable();;
            $table->foreign('projecto_id')->references('id')->on('projectos')->onDelete('cascade');
            
            $table->bigInteger('financiador_id')->unsigned()->nullable();
            $table->foreign('financiador_id')->references('id')->on('financiadors')->onDelete('cascade');
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
        Schema::dropIfExists('projecto__financiadors');
    }
}
