<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddObservacionesImportantesToPatientHealths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_healths', function (Blueprint $table) {
            $table->string('observ_importantes');
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
            $table->dropColumn('observ_importantes');
        });
    }
}