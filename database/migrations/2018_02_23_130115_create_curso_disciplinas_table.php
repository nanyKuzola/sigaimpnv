<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_disciplinas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('disciplina_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade');
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
        Schema::table('curso_disciplinas', function (Blueprint $table) {

            $table->dropForeign('curso_disciplinas_curso_id_foreign');
            $table->dropForeign('curso_disciplinas_disciplina_id_foreign');

        });
        Schema::dropIfExists('curso_disciplinas');
    }
}
