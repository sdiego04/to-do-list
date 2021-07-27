<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->id('id_tarefa');
            $table->string('nome');
            $table->string('descricao');
            $table->boolean('estatus');
            $table->integer('lista_id')->unsigned();
            $table->foreign('lista_id')->references('id_lista')
                ->on('lista')->onDelete('cascade');

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
        Schema::dropIfExists('tarefa');
    }
}
