<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosDatosOutrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_datos_outros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bial')->nullable();
            $table->string('gruposbusca')->nullable();
            $table->date('gruposbuscadata')->nullable();
            $table->string('habilidadessociais')->nullable();
            $table->date('habilidadessociaisdata')->nullable();
            $table->string('orientacionotrasentidades', 4096)->nullable();
            $table->string('tbe')->nullable();
            $table->date('tbedata')->nullable();
            $table->boolean('vehiculopropio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_datos_outros');
    }
}
