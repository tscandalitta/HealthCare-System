<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Paciente::class, function (Faker $faker) {

    return [
        'dni' => $faker->unique()->numberBetween($min = 1000000, $max = 50000000),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'historia_clinica' => $faker->text,
        'direccion' => $faker->address,
        'telefono' => $faker->e164PhoneNumber,
        'token' => Str::random(80),
    ];
});
