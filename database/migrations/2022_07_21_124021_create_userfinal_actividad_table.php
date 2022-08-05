<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserfinalActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfinal_actividad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('actividad_id');
            $table->bigInteger('userfinal_id')->nullable();
            $table->dateTime('fechareserva');
            $table->boolean('pagado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userfinal_actividad');
    }
}
