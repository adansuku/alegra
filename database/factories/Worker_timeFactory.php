<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Worker_time;
use Faker\Generator as Faker;

$factory->define(Worker_time::class, function (Faker $faker) {

    return [
        'id' => $faker->word,
        'fecha_entrada' => $faker->word,
        'fecha_salida' => $faker->word,
        'latitud' => $faker->word,
        'longitud' => $faker->word,
        'dirección' => $faker->word,
        'observaciones' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'worker_id' => $faker->randomDigitNotNull
    ];
});
