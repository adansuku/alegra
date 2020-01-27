<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPatientCarers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_carers', function (Blueprint $table) {
            $table->string('genero_carer')->nullable();
            $table->string('municipio_carer')->nullable();
            $table->string('estudios_carer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_carers', function (Blueprint $table) {
            $table->dropColumn('genero_carer');
            $table->dropColumn('municipio_carer');
            $table->dropColumn('estudios_carer');
        });
    }
}
