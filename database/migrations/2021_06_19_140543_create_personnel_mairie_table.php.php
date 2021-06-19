<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelMairieTable    extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personalMairie', function (Blueprint $table) {
            $table->string('idPM');
            $table->string('namePM');
            $table->string('fnamePM');
            $table->string('passwordPM');
            $table->string('telPM');
            $table->string('statutPM');
            $table->string('adressPM');
            $table->string('emailPM');
            $table->string('idPD')->unique();
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
    }
}
