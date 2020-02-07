<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action',10);
            $table->string('latitud');
            $table->string('longitud');
            $table->string('direccion');
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
        Schema::dropIfExists('worker_sessions');
    }
}
