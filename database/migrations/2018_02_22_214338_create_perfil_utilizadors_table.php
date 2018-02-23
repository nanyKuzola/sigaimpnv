<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilUtilizadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_utilizadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('perfil_id')->unsigned();
            $table->integer('utilizador_id')->unsigned();

            $table->foreign('perfil_id')->references('id')->on('perfils')->onDelete('cascade');
            $table->foreign('utilizador_id')->references('id')->on('utilizadors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perfil_utilizadors', function (Blueprint $table) {
            $table->dropForeign('perfil_utilizadors_perfil_id_foreign');
            $table->dropForeign('perfil_utilizadors_utilizador_id_foreign');
        });
        Schema::dropIfExists('perfil_utilizadors');
    }
}
