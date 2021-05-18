<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_dias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('horario');
            $table->string('dia_centro');
            $table->integer('patient_centro_id')->unsigned();
            $table->foreign('patient_centro_id')->references('id')->on('patient_centros')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('centro_dias');
    }
}
