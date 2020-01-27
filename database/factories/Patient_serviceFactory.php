<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient_service;
use Faker\Generator as Faker;

$factory->define(Patient_service::class, function (Faker $faker) {

    return [
        'id' => $faker->word,
        'nom_servicio' => $faker->word,
        'municipio_serv' => $faker->word,
        'tipo_plaza_serv' => $faker->word,
        'plaza_privada_serv' => $faker->word,
        'plaza_sub_serv' => $faker->word,
        'fecha_form_serv' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'patient_id' => $faker->randomDigitNotNull
    ];
});
