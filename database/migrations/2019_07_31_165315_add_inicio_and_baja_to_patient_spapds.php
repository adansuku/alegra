<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInicioAndBajaToPatientSpapds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_spapds', function (Blueprint $table) {
            $table->time('fecha_inicio');
            $table->string('baja_spapd');
            $table->json('dia_spapd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_spapds', function (Blueprint $table) {
            $table->dropColumn('fecha_inicio');
            $table->dropColumn('baja_spapd');
            $table->dropColumn('dia_spapd');
        });
    }
}
