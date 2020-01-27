<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_expediente');
            $table->string('foto_paciente');
            $table->date('fecha_alta_paciente')->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('alias');
            $table->string('genero');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dni');
            $table->string('estado_civil');
            $table->string('direccion');
            $table->integer('codigo_postal');
            $table->string('Municipio');
            $table->string('Isla');
            $table->integer('telefono');
            $table->integer('telefono_movil');
            $table->json('convive_con')->nullable();
            $table->string('grado_dependencia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}
