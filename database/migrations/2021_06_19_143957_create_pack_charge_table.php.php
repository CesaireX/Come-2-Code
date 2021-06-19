<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackChargeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('packCharge', function (Blueprint $table) {
            $table->string('idPC');
            $table->string('idCc');
            $table->string('idPA');
            $table->string('namePC');
            $table->string('fnamePC');
            $table->string('statutPC');
            $table->integer('telPC');
            $table->string('datePC');
            $table->string('idPM');
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
        Schema::dropIfExists('packCharge');
    }
}
