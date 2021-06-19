<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gie', function (Blueprint $table) {
            $table->string('idG');
            $table->string('nomG');
            $table->string('prenomG');
            $table->string('passwordG');
            $table->string('telG');
            $table->string('adressG');
            $table->string('emailG');
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
        Schema::dropIfExists('gie');
    }
}
