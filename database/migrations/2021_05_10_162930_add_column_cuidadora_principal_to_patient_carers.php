<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCuidadoraPrincipalToPatientCarers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_carers', function (Blueprint $table) {
            $table->string('cuidadora_principal')->nullable();
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
            $table->dropColumn('cuidadora_principal');
        });
    }
}