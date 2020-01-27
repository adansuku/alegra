<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiagnosConcretoToPatientDiagnostics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_diagnostics', function (Blueprint $table) {
            $table->json('diagnos_concreto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_diagnostics', function (Blueprint $table) {
            $table->dropColumn('diagnos_concreto')->nullable();
        });
    }
}
