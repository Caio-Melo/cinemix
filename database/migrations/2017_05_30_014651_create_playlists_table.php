<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('playlists', function (Blueprint $table) {
            $table->integer('lista_id')->unsigned();
            $table->integer('filme_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();
            $table->foreign('lista_id')->references('id')->on('listas');
            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
