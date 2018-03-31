<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudanteTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudante_testes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('estudante_id')->unsigned()->nullable();
            $table->foreign('estudante_id')->references('id')->on('estudantes')->onDelete('cascade');
            $table->integer('teste_id')->unsigned()->nullable();
            $table->foreign('teste_id')->references('id')->on('testes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudante_testes', function (Blueprint $table) {

            $table->dropForeign('estudante_testes_teste_id_foreign');
            $table->dropForeign('estudante_testes_estudante_id_foreign');

        });
        Schema::dropIfExists('estudante_testes');
    }
}
