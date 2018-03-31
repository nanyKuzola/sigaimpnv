<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('disciplina_professors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('professor_id')->unsigned()->nullable();
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');

            $table->integer('disciplina_id')->unsigned()->nullable();;
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disciplina_professors', function (Blueprint $table) {

            $table->dropForeign('disciplina_professors_professor_id_foreign');
            $table->dropForeign('disciplina_professors_disciplina_id_foreign');

        });
        Schema::dropIfExists('disciplina_professors');
    }
}
