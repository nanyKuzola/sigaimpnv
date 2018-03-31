<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToEstudanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estudantes', function (Blueprint $table) {
            //
            $table->integer('turma_id')->unsigned()->nullable();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('estudantes', function (Blueprint $table) {
            //
            $table->dropForeign('estudantes_turma_id_foreign');
        });
    }
}
