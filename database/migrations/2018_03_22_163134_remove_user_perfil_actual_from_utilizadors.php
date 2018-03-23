<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUserPerfilActualFromUtilizadors extends Migration
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
            $table->dropColumn('perfilAtual');

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
            $table->string('perfilAtual');
        });
    }
}
