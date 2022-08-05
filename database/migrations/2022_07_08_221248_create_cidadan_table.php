<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadans', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('addiccions');
            $table->text('addiccionsnota');
            $table->string('apel1');
            $table->string('apel2');
            $table->string('bial');
            $table->string('codpostal');
            $table->date('databaja');
            $table->date('dataincorporacion');
            $table->date('datanacemento');
            $table->boolean('desempregadolongaduracion');
            $table->text('desempregadolongaduracionnota');
            $table->boolean('discapacidade');
            $table->text('discapacidadenota');
            $table->string('email');  // ->unique();php artisan migrate:rollback
            $table->text('enderezo');
            $table->boolean('exreclusa');
            $table->text('exreclusanota');
            $table->string('gruposbusca');
            $table->string('gruposbuscadata');
            $table->string('habilidadessociais');
            $table->string('habilidadessociaisdata');
            $table->boolean('lopd');
            $table->string('nif');  // ->unique();
            $table->string('nome');
            $table->text('notabaja');
            $table->text('observacions');
            $table->boolean('orientacion');
            $table->boolean('outrasexclusions');
            $table->text('outrasexclusionsnota');
            $table->boolean('residenciadificilaccesibilidade');
            $table->text('residenciadificilaccesibilidadenota');
            $table->boolean('responsabilidadesfamiliares');
            $table->text('responsabilidadesfamiliaresnota');
            $table->string('sexo');
            $table->string('spe');
            $table->string('tbe');
            $table->string('tbedata');
            $table->string('tfno1');
            $table->string('tfno2');
            $table->boolean('vehiculopropio');
            $table->string('vo');
            $table->text('vonota');
            $table->foreignId('accionsfe_id');
            $table->foreignId('canleacceso_id');
            $table->foreignId('datosoutros_id');
            $table->foreignId('disponibilidadexeografica_id');
            $table->foreignId('emigraciontype_id');
            $table->foreignId('interesaautoemprego_id');
            $table->foreignId('nacionalidade_id');
            $table->foreignId('operador_id');
            $table->foreignId('poboacion_idconcello');
            $table->foreignId('tipobaixa_id');
            $table->boolean('vvx');
            $table->text('vvxnota');
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
        Schema::dropIfExists('cidadans');
    }
}
