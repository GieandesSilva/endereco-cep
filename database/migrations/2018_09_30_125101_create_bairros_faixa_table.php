<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBairrosFaixaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bairros_faixa', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cep_inicial', 8);
            $table->char('cep_final', 8);
            $table->integer('bairro_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('bairros_faixa', function (Blueprint $table) {
            $table->foreign('bairro_id')->references('id')->on('bairros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bairros_faixa');
    }
}
