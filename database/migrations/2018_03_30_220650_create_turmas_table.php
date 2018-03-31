<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');
            $table->integer('professor_id')->unsigned()->nullable(); // para ajudar a responder quem é o professor director de turma
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
        });
    }

    /**6
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
