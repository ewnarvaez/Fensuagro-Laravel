<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Victima;
use Faker\Generator as Faker;

$factory->define(Victima::class, function (Faker $faker) {
    return [
        'numeroidentificacion' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'tipoidentificacion' => $faker->word(),
        'nombre' => $faker->firstName(),
        'apellido' => $faker->lastName(),
        'email' => $faker->safeEmail(),
        'fechanacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'lugarnacimiento' => $faker->word(),
        'genero' => $faker->word(),
        'sectorsocial' => $faker->word()
    ];
});
