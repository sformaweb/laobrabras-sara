<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendariosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarios_usuarios', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('domingo');
            $table->string('jueves');
            $table->string('lunes');
            $table->string('martes');
            $table->string('miercoles');
            $table->string('sabado');
            $table->string('viernes');
            $table->bigInteger('calendario_id')->nullable();
            $table->bigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendarios_usuarios');
    }
}
