<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkerHistoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('his_categoria');
            $table->string('his_tipo');
            $table->mediumText('his_respuesta');
            $table->string('his_observaciones')->nullable();
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
        Schema::drop('worker_histories');
    }
}
