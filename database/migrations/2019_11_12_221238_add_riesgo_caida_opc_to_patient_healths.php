<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRiesgoCaidaOpcToPatientHealths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_healths', function (Blueprint $table) {
            $table->string('riesgo_caida_opc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_healths', function (Blueprint $table) {
            $table->dropColumn('riesgo_caida_opc');
        });
    }
}
