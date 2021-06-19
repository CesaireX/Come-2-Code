<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('centerProcessValue', function (Blueprint $table) {
            $table->string('idCpv');
            $table->string('nameCpv');
            $table->string('telCpv');
            $table->string('adressCpv');
            $table->integer('numberBaCpv');
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
        //
        Schema::dropIfExists('centerProcessValue');
    }
}
