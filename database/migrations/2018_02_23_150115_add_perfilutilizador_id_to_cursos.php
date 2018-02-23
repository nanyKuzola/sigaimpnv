<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerfilutilizadorIdToCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
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
        Schema::table('cursos', function (Blueprint $table) {

            $table->dropForeign('cursos_perfilutilizador_id_foreign');

        });

    }
}
