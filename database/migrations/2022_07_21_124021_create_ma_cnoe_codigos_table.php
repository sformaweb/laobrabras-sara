<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaCnoeCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma_cnoe_codigos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 100);
            $table->string('niveles', 100);
            $table->string('nome', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ma_cnoe_codigos');
    }
}
