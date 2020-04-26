<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivel_educativo');
            $table->string('estudios_end');
            $table->string('ocupacion');
            $table->string('intereses');
            $table->string('lee_escribe');
            $table->string('situacion_dep');
            $table->string('grado_dep');
            $table->string('nivel_dep');
            $table->string('ayuda_dep');
            $table->string('cuantia');
            $table->string('tec_dependencia');
            $table->string('guarda_hecho');
            $table->string('ayuda_soc');
            $table->string('cert_disc');
            $table->string('grado_disc');
            $table->date('fecha_res_disc')->nullable();
            $table->json('tipo_disc');
            $table->string('sit_legal');
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
        Schema::drop('patient_infos');
    }
}
