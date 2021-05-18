<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_centros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prog_centro');
            $table->integer('num_sesiones');
            $table->string('worker_id');
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
        Schema::dropIfExists('patient_centros');
    }
}
