<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoUtilizadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_utilizadors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('utilizador_id')->unsigned();;
            $table->integer('curso_id')->unsigned();;

            $table->foreign('utilizador_id')->references('id')->on('utilizadors')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso_utilizadors', function (Blueprint $table) {
            $table->dropForeign('curso_utilizadors_curso_id_foreign');
            $table->dropForeign('curso_utilizadors_utilizador_id_foreign');

        });
        Schema::dropIfExists('curso_utilizadors');
    }
}
