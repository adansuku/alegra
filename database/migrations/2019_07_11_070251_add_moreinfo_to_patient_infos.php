<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreinfoToPatientInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_infos', function (Blueprint $table) {
            $table->string('miem_familia');
            $table->integer('hijos');
            $table->string('vivienda');
            $table->string('vivienda_otros');
            $table->string('ingresos_m');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_infos', function (Blueprint $table) {
            $table->dropColumn('miem_familia');
            $table->dropColumn('hijos');
            $table->dropColumn('vivienda');
            $table->dropColumn('vivienda_otros');
            $table->dropColumn('ingresos_m');
        });
    }
}
