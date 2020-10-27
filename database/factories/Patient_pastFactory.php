<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient_past;
use Faker\Generator as Faker;

$factory->define(Patient_past::class, function (Faker $faker) {

    return [
        'id' => $faker->word,
        'antecedentes' => $faker->word,
        'antecedentes_obs' => $faker->word,
        'antecedentes_anio' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'patient_id' => $faker->randomDigitNotNull
    ];
});
