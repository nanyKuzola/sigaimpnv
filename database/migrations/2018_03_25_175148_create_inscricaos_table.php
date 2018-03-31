<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('estado')->nullable();

            $table->integer('estudante_id')->unsigned();
            $table->foreign('estudante_id')->references('id')->on('estudantes')->onDelete('cascade');


            $table->integer('fsp_id')->unsigned()->nullable();
            $table->foreign('fsp_id')->references('id')->on('fsps')->onDelete('cascade');

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
        Schema::dropIfExists('inscricaos');
    }
}
