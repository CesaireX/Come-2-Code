<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCCTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('centerStock', function (Blueprint $table) {
            $table->string('codeCc');
            $table->string('nomCc');
            $table->string('telCc');
            $table->string('adressCc');
            $table->integer('nbreBaCc');
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
        Schema::dropIfExists('centerStock');
    }
}
