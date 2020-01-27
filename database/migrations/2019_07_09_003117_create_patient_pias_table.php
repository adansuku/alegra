<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientPiasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_pias', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_limite')->nullable();
            $table->date('fecha_real')->nullable();;
            $table->string('tipo_pia');
            $table->string('url_pia')->nullable();;
            $table->string('obs_pia')->nullable();;
            $table->integer('patient_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient_pias');
    }
}
