<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->nullable();
            $table->float('coste', 8, 2);
            $table->boolean('costeasoc');
            $table->dateTime('datafin')->nullable();
            $table->dateTime('datainicio')->nullable();
            $table->string('description')->nullable();
            $table->string('name');
            $table->integer('nummatriculadostotal');
            $table->integer('nummatriculadosweb');
            $table->boolean('needssanitario')->nullable();
            $table->foreignId('programa_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad');
    }
}
