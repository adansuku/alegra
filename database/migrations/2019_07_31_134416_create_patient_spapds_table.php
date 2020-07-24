<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientSpapdsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_spapds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prog_spapd');
            $table->string('otros_programa')->nullable();
            $table->integer('num_sesiones');
            $table->string('otras_sesiones')->nullable();
            $table->string('dur_spapd');
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
        Schema::drop('patient_spapds');
    }
}
