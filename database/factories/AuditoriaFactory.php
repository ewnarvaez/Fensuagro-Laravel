<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Auditoria;
use Faker\Generator as Faker;

$factory->define(Auditoria::class, function (Faker $faker) {
    return [
        'auditoriaaccion' => $faker->word()
    ];
});
