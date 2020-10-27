<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIbanAndEconomyToPatientOthers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_others', function (Blueprint $table) {
            $table->string('anio_tarifa');
            $table->string('iban');
            $table->string('factura');
            $table->string('forma_entrega');
            $table->string('obs_economicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_others', function (Blueprint $table) {
            $table->dropColumn('obser_transporte');
            $table->dropColumn('anio_tarifa');
            $table->dropColumn('iban');
            $table->dropColumn('factura');
            $table->dropColumn('forma_entrega');
            $table->dropColumn('obs_economicas');
        });
    }
}