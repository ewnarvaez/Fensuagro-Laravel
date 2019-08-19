<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'numeroidentificacion' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'tipoidentificacion' => $faker->word(),
        'nombre' => $faker->firstName(),
        'apellido' => $faker->lastName(),
        'email' => $faker->safeEmail(),
        'fechanacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'lugarnacimiento' => $faker->word(),
        'genero' => $faker->word(),
        'usuarionombre' => $faker->userName(),
        'password' => $faker->md5()
    ];
});
