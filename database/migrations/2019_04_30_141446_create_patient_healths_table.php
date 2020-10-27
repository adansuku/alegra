<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientHealthsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_healths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_sanitario');
            $table->string('regimen_priv');
            $table->string('num_afiliado');
            $table->string('med_cabecera');
            $table->string('centro_salud');
            $table->integer('tel_centro_salud');
            $table->string('med_centro');
            $table->string('incontinencia');
            $table->string('caida');
            $table->string('higiene');
            $table->string('ulcera');
            $table->string('deambulacion');
            $table->integer('patient_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient_healths');
    }
}
