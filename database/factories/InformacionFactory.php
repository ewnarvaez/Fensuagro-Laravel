<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Informacion;
use Faker\Generator as Faker;

$factory->define(Informacion::class, function (Faker $faker) {
    return [
        'informacionbrindada' => $faker->sentence($nbWords = 10, $variableNbWords = true)
    ];
});
