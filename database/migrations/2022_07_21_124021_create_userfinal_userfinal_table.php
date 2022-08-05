<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserfinalUserfinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfinal_userfinal', function (Blueprint $table) {
            $table->bigInteger('userfinal_id');
            $table->bigInteger('tutorizados_id');

            $table->primary(['userfinal_id', 'tutorizados_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userfinal_userfinal');
    }
}
