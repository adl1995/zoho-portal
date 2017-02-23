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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'company' => $faker->name,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => '1234',
        'email' => $faker->unique()->safeEmail,
        'verify_key' => 'asd213321',
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});
