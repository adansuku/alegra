<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewfiedlsToPatientPias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_pias', function (Blueprint $table) {
            $table->date('fecha_real_entrega')->nullable();
            $table->string('exito_pia')->nullable();
            $table->string('url_recepcion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_pias', function (Blueprint $table) {
            $table->dropColumn('fecha_real_entrega');
            $table->dropColumn('exito_pia');
            $table->dropColumn('url_recepcion');
        });
    }
}
