<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Entidad;
use Faker\Generator as Faker;

$factory->define(Entidad::class, function (Faker $faker) {
    return [
        'entidadnit' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'entidadnombre' => $faker->name(),
        'entidadrol' => "demandante",
        'entidaddirector' => $faker->name(),
        'entidaddireccion' => $faker->streetAddress(),
        'entidadtelefono' => $faker->phoneNumber(),
        'entidadcorreo' => $faker->unique()->email()       
    ];
});
