<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\OrganizacionSocial;
use Faker\Generator as Faker;

$factory->define(OrganizacionSocial::class, function (Faker $faker) {
    return [
        'orgsocialnit' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'orgsocialnombre' => $faker->unique()->name(),
        'orgsocialdireccion' => $faker->streetAddress(),
        'orgsocialtelefono' => $faker->phoneNumber(),
        'orgsocialresponsable' => $faker->name(),
        'orgsocialsector' => $faker->word()
    ];
});
