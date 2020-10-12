<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dni')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('telefono');
            $table->integer('telefono_movil')->nullable();
            $table->string('email')->unique();
            $table->string('cat_profesional');
            $table->string('titulacion');
            $table->string('centro_acufade');
            $table->string('titulacion_curso');
            $table->string('tutor_academico');
            $table->integer('tutor_telefono');
            $table->string('tutor_email');
            $table->string('persona_ref_Acufade');
            $table->string('cesion_imagen');
            $table->string('alergias');
            $table->string('otras_alergias');
            $table->string('urg_nom_ape');
            $table->string('urg_parentesco');
            $table->string('urg_telefono');
            $table->date('fecha_alta')->nullable();
            $table->date('fecha_baja')->nullable();
            $table->string('email_personal');
            $table->integer('numero_horas');
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
        Schema::drop('workers');
    }
}
