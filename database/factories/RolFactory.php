<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\models\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'rolnombre' => $faker->word,
        'roldescripcion' => $faker->sentence($nbWords = 3, $variableNbWords = true)
    ];
});
