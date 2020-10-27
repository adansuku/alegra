<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkerLaborsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_labors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lab_servicio');
            $table->string('lab_dias');
            $table->integer('lab_horas');
            $table->integer('lab_horas_semana');
            $table->integer('worker_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('worker_labors');
    }
}
