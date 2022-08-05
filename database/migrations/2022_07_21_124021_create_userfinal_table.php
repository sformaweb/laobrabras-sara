<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserfinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfinal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apelido1', 50);
            $table->string('apelido2', 50)->nullable();
            $table->string('codpostal', 6);
            $table->date('datanacemento');
            $table->string('email')->nullable();
            $table->string('enderezo');
            $table->boolean('envioinfo_permiso');
            $table->integer('estadoprofesional');
            $table->string('estudiosactuais');
            $table->string('localidade', 100);
            $table->boolean('lopd_datossanitarios');
            $table->boolean('lopd_permiso');
            $table->string('nif', 20);
            $table->string('nivelformativo');
            $table->string('nome', 60);
            $table->string('ocupacion');
            $table->string('outrosestudios');
            $table->string('tfnofixo', 15)->nullable();
            $table->string('tfnomovil', 15)->nullable();
            $table->bigInteger('sanitario_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userfinal');
    }
}
