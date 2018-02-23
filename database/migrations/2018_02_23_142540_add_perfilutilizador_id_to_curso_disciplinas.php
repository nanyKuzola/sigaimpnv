<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerfilutilizadorIdToCursoDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curso_disciplinas', function (Blueprint $table) {
            $table->integer('perfilutilizador_id')->unsigned();
            $table->foreign('perfilutilizador_id')->references('id')->on('perfil_utilizadors')->onDelete('cascade');
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

            $table->dropForeign('curso_disciplinas_perfilutilizador_id_foreign');

        });

    }
}
