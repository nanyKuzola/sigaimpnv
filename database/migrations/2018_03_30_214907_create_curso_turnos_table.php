<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_turnos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('curso_id')->unsigned()->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->integer('turno_id')->unsigned()->nullable();
            $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso_turnos', function (Blueprint $table) {

            $table->dropForeign('curso_turnos_turno_id_foreign');
            $table->dropForeign('curso_turnos_curso_id_foreign');

        });
        Schema::dropIfExists('curso_turnos');
    }
}
