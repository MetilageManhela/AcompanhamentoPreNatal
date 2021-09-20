<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao')->nullable();
            $table->date('dataInicio')->nullable();
            $table->date('dataTermino')->nullable();
            $table->string('observacao')->nullable();
             $table->string('objectivo')->nullable();
            $table->string('arquivos')->nullable();
            //funciona
            $table->decimal('orcamento')->nullable();
            $table->string('moeda')->nullable();
            //
            $table->bigInteger('financiador_id')->unsigned();
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
        Schema::dropIfExists('projectos');
    }
}
