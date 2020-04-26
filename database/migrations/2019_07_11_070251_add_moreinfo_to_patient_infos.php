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
            $table->string('miem_familia')->nullable;
            $table->integer('hijos')->nullable;
            $table->string('vivienda')->nullable;
            $table->string('vivienda_otros')->nullable;
            $table->string('ingresos_m')->nullable;
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
