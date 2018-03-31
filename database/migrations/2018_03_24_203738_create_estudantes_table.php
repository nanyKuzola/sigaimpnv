<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primeiro_nome',50);
            $table->string('sobre_nome',50);
            $table->integer('estado');
            $table->string('morada',50)->nullable();
            $table->string('telefone',13)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->integer('born_day');
            $table->integer('born_month');
            $table->integer('born_year');
            $table->integer('idade');
            $table->string('bi');
            $table->integer('bi_day');
            $table->integer('bi_month');
            $table->integer('bi_year');
            $table->string('bi_local_emmissao');
            $table->string('genero');
            $table->string('opcao_curso_1');
            $table->string('opcao_curso_2');
            $table->string('opcao_curso_3');
            $table->rememberToken();
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
        Schema::dropIfExists('estudantes');
    }
}
