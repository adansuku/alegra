<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientCarersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_carers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('dni')->nullable();
            $table->date('fecha_nac_care')->nullable();
            $table->string('direccion_care')->nullable();
            $table->integer('tel_care');
            $table->integer('movil_care')->nullable();
            $table->string('email_care')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('sit_laboral')->nullable();
            $table->json('trabajo_care')->nullable();
            $table->date('ano_care')->nullable();
            $table->string('sit_apoyo')->nullable();
            $table->string('cesion_care')->nullable();
            $table->string('es_tutor')->nullable();
            $table->json('contactar_para')->nullable();
            $table->string('es_referencia')->nullable();
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
        Schema::drop('patient_carers');
    }
}
