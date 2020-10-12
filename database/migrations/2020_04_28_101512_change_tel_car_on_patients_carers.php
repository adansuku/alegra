<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTelCarOnPatientsCarers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_carers', function (Blueprint $table) {
            $table->integer('tel_care')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_carers', function (Blueprint $table) {
            $table->integer('tel_care')->nullable(false)->change();
        });
        
    }
}
