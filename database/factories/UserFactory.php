<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'photo'=>'touxiang.jpg',
        'auth'=>rand(1,3),
        'name' => $faker->name,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'sex'=>'n',
        'age'=>rand(10,80),
        'phone'=>$faker->phoneNumber(),
        'email' => $faker->unique()->safeEmail,
        'created_at'=> $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now'),
        'remember_token' => str_random(10)
    ];
});
