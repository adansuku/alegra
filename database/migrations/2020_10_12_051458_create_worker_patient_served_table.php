<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerPatientServedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_patient_served', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('worker_id')->unsigned()->default(0);
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->integer('patient_id')->unsigned()->default(0);
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker_patient_served');
    }
}
