<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkerTimesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_times', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_entrada');
            $table->string('fecha_salida');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('dirección');
            $table->string('observaciones');
            $table->integer('worker_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('worker_id')->references('id')->on('workers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('worker_times');
    }
}
