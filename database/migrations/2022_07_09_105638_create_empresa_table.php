<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id'); // empresa id

            $table->string('codpostal');
            $table->date('databaja');
            $table->date('dataprimeirocontacto');
            $table->string('email')->unique();
            $table->string('enderezo');
            $table->string('fax');
            $table->string('localidade');
            $table->string('name');
            $table->text('notabaja');
            $table->integer('numtrabajadores');
            $table->text('observacions');
            $table->text('outrarelacionconcelleria');
            $table->integer('tfnofijo');
            $table->integer('tfnomovil');
            $table->string('web');

            $table->string('actividade_id');
            $table->string('centro_id');
            $table->string('orientador_id');
            $table->string('provincia_id');
            // $table->string('persoa_contacto');
            // $table->integer('ofertas_contratacion');
            // $table->integer('ofertas_formacion');
            $table->timestamps();



        });
    }
// codpostal,databaja,dataprimeirocontacto,email,enderezo,fax,localidade,nome,notabaja,numtrabajadores,observacions,outrarelacionconcelleria,tfnofijo,tfnomovil,web,actividade_id,centro_id,orientador_id,provincia_id
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
