<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient_medication;
use Faker\Generator as Faker;

$factory->define(Patient_medication::class, function (Faker $faker) {

    return [
        'id' => $faker->word,
        'medicacion' => $faker->word,
        'pauta_medicacion' => $faker->word,
        'obs_medicacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'patient_id' => $faker->randomDigitNotNull
    ];
});
