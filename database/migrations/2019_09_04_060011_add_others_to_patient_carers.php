<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthersToPatientCarers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_carers', function (Blueprint $table) {
            $table->string('otro_paren')->nullable();
            $table->string('otro_ocupacion')->nullable();
            $table->string('otro_trabajo')->nullable();
            $table->string('otro_serv_apoyo')->nullable();
            $table->string('otro_contactar_para')->nullable();
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
            $table->dropColumn('otro_paren');
            $table->dropColumn('otro_ocupacion');
            $table->dropColumn('otro_trabajo');
            $table->dropColumn('otro_serv_apoyo');
            $table->dropColumn('otro_contactar_para');
        });
    }
}
