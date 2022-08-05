<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('primeiro_apelido');
            $table->string('segundo_apelido');
            $table->string('nif')->unique();
            $table->date('data_nacemento');
            $table->enum('sexo', ['HOME', 'MULLER', 'OUTRO']);
            $table->integer('codigo_postal');
            $table->integer('telefono');
            $table->string('email');
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
        Schema::dropIfExists('persoas');
    }
}
