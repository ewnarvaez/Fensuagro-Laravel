<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Denuncia;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Denuncia::class, function (Faker $faker) {
    return [
        'denunciaresumen' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'denunciadescripcion' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'denunciafecharadicacion' => Carbon::now()
    ];
});
