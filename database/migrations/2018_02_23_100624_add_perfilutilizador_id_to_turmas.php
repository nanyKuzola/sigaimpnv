<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerfilutilizadorIdToTurmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turmas', function (Blueprint $table) {
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
        Schema::table('turmas', function (Blueprint $table) {

            $table->dropForeign('turmas_perfilutilizador_id_foreign');

        });

    }

}
