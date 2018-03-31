<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlteracoesEmEstudantes extends Migration
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
            $table->string('nome_utilizador')->unique()->nullable();
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
            Schema::dropIfExists('estudantes');
        });
    }
}
