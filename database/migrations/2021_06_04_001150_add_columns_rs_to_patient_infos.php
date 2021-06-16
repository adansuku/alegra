<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsRsToPatientInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_infos', function (Blueprint $table) {
            $table->string('rs_grado')->nullable();
            $table->string('rs_revision')->nullable();
            $table->string('rs_reclamacion')->nullable();
            $table->json('rs_tipo_ayuda')->nullable();
            $table->string('rs_otros')->nullable();
            $table->json('rs_ultimo_tramite')->nullable();
            $table->string('rs_fecha_registro')->nullable();
            $table->json('rs_proximo_tramite')->nullable();
            $table->string('reclamacion')->nullable();
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
            $table->dropColumn('rs_grado');
            $table->dropColumn('rs_revision');
            $table->dropColumn('rs_reclamacion');
            $table->dropColumn('rs_tipo_ayuda');
            $table->dropColumn('rs_otros');
            $table->dropColumn('rs_ultimo_tramite');
            $table->dropColumn('rs_fecha_registro');
            $table->dropColumn('rs_proximo_tramite');
            $table->dropColumn('reclamacion');
        });
    }
}
