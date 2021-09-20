<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectoTiposBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projecto__tipos_beneficiarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('projecto_id')->unsigned()->nullable();;
            $table->foreign('projecto_id')->references('id')->on('projectos')->onDelete('cascade');
            
            $table->bigInteger('beneficiario_tipo_id')->unsigned()->nullable();
            $table->foreign('beneficiario_tipo_id')->references('id')->on('beneficiario_tipos')->onDelete('cascade');
         
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
        Schema::dropIfExists('projecto__tipos_beneficiarios');
    }
}
