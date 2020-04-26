<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientHistoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->date('acc_fecha_reg')->nullable();
            $table->date('acc_fecha_realiz')->nullable();
            $table->string('acc_tipo_accion');
            $table->string('acc_subtipo_accion');
            $table->string('acc_descrip');
            $table->string('acc_observaciones')->nullable();
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
        Schema::drop('patient_histories');
    }
}
