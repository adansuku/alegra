<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientOthersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_others', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_trans')->nullable();
            $table->string('transporte');
            $table->string('cesion_imagen');
            $table->string('salir_centro');
            $table->string('riesgo_caidas');
            $table->string('salida_externa');
            $table->string('socio');
            $table->string('no_socio');
            $table->string('forma_pago');
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
        Schema::drop('patient_others');
    }
}
