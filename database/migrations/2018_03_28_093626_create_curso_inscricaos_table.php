<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_inscricaos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

            $table->integer('inscricao_id')->unsigned();
            $table->foreign('inscricao_id')->references('id')->on('inscricaos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso_inscricaos', function (Blueprint $table) {

            $table->dropForeign('curso_inscricaos_curso_id_foreign');
            $table->dropForeign('curso_inscricaos_inscricao_id_foreign');

        });
        Schema::dropIfExists('curso_inscricaos');
    }
}
