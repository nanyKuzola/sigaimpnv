<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UtilizadorsAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilizadors', function (Blueprint $table) {
            //
            $table->string('nome_pai',50);
            $table->string('nome_mae',50);
            $table->integer('born_day');
            $table->integer('born_month');
            $table->integer('born_year');
            $table->integer('idade');
            $table->string('bi',50);
            $table->integer('bi_day');
            $table->integer('bi_month');
            $table->integer('bi_year');
            $table->string('bi_local_emmissao');
            $table->string('genero');
            $table->string('opcao_curso_1');
            $table->string('opcao_curso_2');
            $table->string('opcao_curso_3');
            $table->string('area_formacao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilizadors', function (Blueprint $table) {
            //
            $table->dropColumn('nome_pai');
            $table->dropColumn('nome_mae');
            $table->dropColumn('born_day');
            $table->dropColumn('born_month');
            $table->dropColumn('born_year');
            $table->dropColumn('idade');
            $table->dropColumn('bi');
            $table->dropColumn('bi_day');
            $table->dropColumn('bi_month');
            $table->dropColumn('bi_year');
            $table->dropColumn('bi_local_emmissao');
            $table->dropColumn('genero');
            $table->dropColumn('opcao_curso_1');
            $table->dropColumn('opcao_curso_2');
            $table->dropColumn('opcao_curso_3');
            $table->dropColumn('area_formacao');
        });
    }
}
