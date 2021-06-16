<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsPpcToPatientOthers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_others', function (Blueprint $table) {
            $table->json('ppc_motivo')->nullable();
            $table->string('ppc_retirada_epi')->nullable();
            $table->string('ppc_epi')->nullable();
            $table->string('ppc_retirada_mascarilla')->nullable();
            $table->string('ppc_retirada_pantalla')->nullable();
            $table->string('ppc_se_vacuno')->nullable();
            $table->string('ppc_dosis_recibida')->nullable();
            $table->string('ppc_tipo_vacuna')->nullable();
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
            $table->dropColumn('ppc_motivo');
            $table->dropColumn('ppc_retirada_epi');
            $table->dropColumn('ppc_epi');
            $table->dropColumn('ppc_retirada_mascarilla');
            $table->dropColumn('ppc_retirada_pantalla');
            $table->dropColumn('ppc_se_vacuno');
            $table->dropColumn('ppc_dosis_recibida');
            $table->dropColumn('ppc_tipo_vacuna');
        });
    }
}
