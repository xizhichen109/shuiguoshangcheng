<?php

use Faker\Generator as Faker;

$factory->define(App\Detail::class, function (Faker $faker) {
    return [
        //
        'type_id'=>rand(1,3),
        'name' => $faker->name,
        'price'=>rand(30,100),
        'image'=>'4.jpg',
        'des'=>$faker->text,
        'hot'=>rand(1,5),
        'created_at'=> $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years'),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now')
    ];
});
