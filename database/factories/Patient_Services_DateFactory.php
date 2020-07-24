<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient_Services_Date;
use Faker\Generator as Faker;

$factory->define(Patient_Services_Date::class, function (Faker $faker) {

    return [
        'id' => $faker->word,
        'dia_servicio' => $faker->word,
        'horario_servicio' => $faker->word,
        'obs_servicio' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'patient_service_id' => $faker->randomDigitNotNull
    ];
});
