<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientSpapdDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_spapd_dias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('fecha_inicio');
            $table->string('dia_spapd');
            $table->integer('patient_spapd_id')->unsigned();
            $table->foreign('patient_spapd_id')->references('id')->on('patient_spapds')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('patient_spapd_dias');
    }
}
