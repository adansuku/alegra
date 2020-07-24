<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientDatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_dates', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_paciente');
            $table->string('desc_fecha_paciente');
            $table->string('documento_fecha_paciente');
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
        Schema::drop('patient_dates');
    }
}
