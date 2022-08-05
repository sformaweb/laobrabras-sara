<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserfinalsanitarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfinalsanitario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alerxias')->nullable();
            $table->string('enfermidades')->nullable();
            $table->string('medicamentoshabituais')->nullable();
            $table->string('numsegprivado')->nullable();
            $table->string('numsegsocial')->nullable();
            $table->string('observacions')->nullable();
            $table->boolean('segprivado');
            $table->boolean('segsocial');
            $table->string('vacinas')->nullable();
            $table->binary('scansegprivado')->nullable();
            $table->binary('scansegsocial')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userfinalsanitario');
    }
}
