<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFwSegGruposRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fw_seg_grupos_roles', function (Blueprint $table) {
            $table->bigInteger('grupo_id');
            $table->bigInteger('rol_id');

            $table->primary(['grupo_id', 'rol_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fw_seg_grupos_roles');
    }
}
