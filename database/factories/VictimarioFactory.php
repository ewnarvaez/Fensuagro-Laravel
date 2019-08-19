<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Victimario;
use Faker\Generator as Faker;

$factory->define(Victimario::class, function (Faker $faker) {
    return [
        'numeroidentificacion' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'tipoidentificacion' => $faker->word(),        
        'genero' => $faker->word(),
        'rasgosfisicos' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'acento' => $faker->word(),
        'alias' => $faker->userName()        
    ];
});
