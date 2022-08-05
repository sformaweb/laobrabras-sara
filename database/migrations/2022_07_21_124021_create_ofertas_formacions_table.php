<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas_formacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa');
            $table->string('posto');
            $table->date('data_inicio');
            $table->date('data_fin');
            $table->integer('num_prazas');
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
        Schema::dropIfExists('ofertas_formacions');
    }
}
