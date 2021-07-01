<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraToPatientPia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_pias', function (Blueprint $table) {
                $table->string('plan_cognitivo')->nullable();
                $table->string('rec_cognitivo')->nullable();
                $table->string('plan_emocional')->nullable();
                $table->string('rec_emocional')->nullable();
                $table->string('plan_fisico')->nullable();
                $table->string('rec_fisico')->nullable();
                $table->string('plan_funcional')->nullable();
                $table->string('rec_funcional')->nullable();
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
            $table->dropColumn('plan_cognitivo')->nullable();
            $table->dropColumn('rec_cognitivo')->nullable();
            $table->dropColumn('plan_emocional')->nullable();
            $table->dropColumn('rec_emocional')->nullable();
            $table->dropColumn('plan_fisico')->nullable();
            $table->dropColumn('rec_fisico')->nullable();
            $table->dropColumn('plan_funcional')->nullable();
            $table->dropColumn('rec_funcional')->nullable();
    });
    }
}
