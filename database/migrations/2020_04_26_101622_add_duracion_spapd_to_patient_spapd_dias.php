<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDuracionSpapdToPatientSpapdDias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_spapd_dias', function (Blueprint $table) {
            $table->string('duracion_spapd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_spapd_dias', function (Blueprint $table) {
            $table->dropColumn('duracion_spapd');
        });
    }
}
