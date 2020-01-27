<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientServicesDatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient__services__dates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia_servicio');
            $table->string('horario_servicio');
            $table->string('obs_servicio')->nullable();
            $table->integer('patient_service_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('patient_service_id')->references('id')->on('patient_services')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient__services__dates');
    }
}
