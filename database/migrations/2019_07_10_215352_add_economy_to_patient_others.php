<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEconomyToPatientOthers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_others', function (Blueprint $table) {
            $table->integer('importe_serv');
            $table->integer('importe_trans');
            $table->string('cuota_socio');
            $table->string('periodicidad');
            $table->string('pago_socio');
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
            $table->dropColumn('importe_serv');
            $table->dropColumn('importe_trans');
            $table->dropColumn('cuota_socio');
            $table->dropColumn('periodicidad');
            $table->dropColumn('pago_socio');
        });
    }
}
