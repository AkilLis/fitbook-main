<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Club::class, function (Faker\Generator $faker) {
    return [
        'club_id' => $faker->name,
        'short_name' => $faker->name,
        'full_name' => $faker->name,
        'full_name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->cellphone,
        'lat' => $faker->latitude,
        'lng' => $faker->longitute,
    ];
});